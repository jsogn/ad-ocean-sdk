<?php

declare(strict_types=1);

use AdOceanSdk\Kernel\Exceptions\ApiResponseException;
use AdOceanSdk\Kernel\Exceptions\AuthException;
use AdOceanSdk\Kernel\Exceptions\NetworkException;
use AdOceanSdk\Kernel\Exceptions\RateLimitException;
use AdOceanSdk\Kernel\Exceptions\SdkException;
use AdOceanSdk\Kernel\Middleware\ApiErrorMiddleware;
use AdOceanSdk\Kernel\Middleware\OAuthRefreshMiddleware;
use AdOceanSdk\Kernel\Middleware\Pipeline;
use AdOceanSdk\Kernel\Middleware\RequestContext;
use AdOceanSdk\Kernel\Middleware\RetryMiddleware;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;
use AdOceanSdk\RequestResponse;
use GuzzleHttp\Promise\Create as PromiseCreate;
use GuzzleHttp\Promise\PromiseInterface;
use PHPUnit\Framework\TestCase;

final class MiddlewaresTest extends TestCase
{
    private function ctx(): RequestContext
    {
        return new RequestContext(new MwDummyApi(), 'GET', 'https://example.com/x');
    }

    private function ok(int $code = 0): RequestResponse
    {
        return RequestResponse::from(['code' => $code, 'message' => 'm', 'request_id' => 'r', 'data' => []]);
    }

    private function resolved(int $code = 0): PromiseInterface
    {
        return PromiseCreate::promiseFor($this->ok($code));
    }

    public function testApiErrorMiddlewareReturnsResponseWhenCodeIsZero(): void
    {
        $mw = new ApiErrorMiddleware();
        $resp = $mw->process($this->ctx(), fn () => $this->resolved(0))->wait();
        self::assertSame(0, $resp->getCode());
    }

    public function testApiErrorMiddlewareThrowsAuthExceptionOnConfiguredCode(): void
    {
        $mw = new ApiErrorMiddleware([40100], []);
        $this->expectException(AuthException::class);
        $mw->process($this->ctx(), fn () => $this->resolved(40100))->wait();
    }

    public function testApiErrorMiddlewareThrowsRateLimitOnConfiguredCode(): void
    {
        $mw = new ApiErrorMiddleware([], [40000]);
        $this->expectException(RateLimitException::class);
        $mw->process($this->ctx(), fn () => $this->resolved(40000))->wait();
    }

    public function testApiErrorMiddlewareThrowsGenericApiResponseExceptionOtherwise(): void
    {
        $mw = new ApiErrorMiddleware([], []);
        try {
            $mw->process($this->ctx(), fn () => $this->resolved(50001))->wait();
            self::fail('expected ApiResponseException');
        } catch (ApiResponseException $e) {
            self::assertNotInstanceOf(AuthException::class, $e);
            self::assertNotInstanceOf(RateLimitException::class, $e);
            self::assertSame(50001, $e->getCode());
            self::assertInstanceOf(SdkException::class, $e);
        }
    }

    public function testRetryMiddlewareRetriesOnNetworkExceptionAndSucceeds(): void
    {
        $mw = new RetryMiddleware(maxAttempts: 3, baseDelayMs: 0, maxDelayMs: 0, sleeper: function (): void {});
        $calls = 0;

        $resp = $mw->process($this->ctx(), function () use (&$calls): PromiseInterface {
            $calls++;
            if ($calls < 3) {
                return PromiseCreate::rejectionFor(new NetworkException('boom', 'GET', '/'));
            }
            return $this->resolved(0);
        })->wait();

        self::assertSame(3, $calls);
        self::assertSame(0, $resp->getCode());
    }

    public function testRetryMiddlewareGivesUpAfterMaxAttempts(): void
    {
        $mw = new RetryMiddleware(maxAttempts: 2, baseDelayMs: 0, maxDelayMs: 0, sleeper: function (): void {});
        $calls = 0;

        try {
            $mw->process($this->ctx(), function () use (&$calls): PromiseInterface {
                $calls++;
                return PromiseCreate::rejectionFor(new NetworkException('boom', 'GET', '/'));
            })->wait();
            self::fail('expected NetworkException');
        } catch (NetworkException) {
            self::assertSame(2, $calls);
        }
    }

    public function testRetryMiddlewareDoesNotRetryNonRetryableException(): void
    {
        $mw = new RetryMiddleware(maxAttempts: 5, baseDelayMs: 0, maxDelayMs: 0, sleeper: function (): void {});
        $calls = 0;

        try {
            $mw->process($this->ctx(), function () use (&$calls): PromiseInterface {
                $calls++;
                return PromiseCreate::rejectionFor(new RuntimeException('non-retryable'));
            })->wait();
        } catch (RuntimeException) {
            self::assertSame(1, $calls);
        }
    }

    public function testRetryStacksWithApiErrorOnRateLimit(): void
    {
        $pipeline = new Pipeline();
        $pipeline->push(new RetryMiddleware(3, 0, 0, sleeper: function (): void {}));
        $pipeline->push(new ApiErrorMiddleware([], [40000]));

        $calls = 0;
        $resp = $pipeline->handle($this->ctx(), function () use (&$calls): PromiseInterface {
            $calls++;
            return $calls < 2 ? $this->resolved(40000) : $this->resolved(0);
        })->wait();

        self::assertSame(2, $calls);
        self::assertSame(0, $resp->getCode());
    }

    public function testOAuthRefreshAttachesTokenAndRetriesOnAuthException(): void
    {
        $tokens = ['old', 'new'];
        $refreshes = 0;
        $mw = new OAuthRefreshMiddleware(
            tokenGetter: fn (): string => $tokens[0],
            tokenRefresher: function () use (&$refreshes, &$tokens): string {
                $refreshes++;
                array_shift($tokens);
                return $tokens[0];
            },
        );

        $seenTokens = [];
        $calls = 0;
        $resp = $mw->process($this->ctx(), function (RequestContext $ctx) use (&$calls, &$seenTokens): PromiseInterface {
            $calls++;
            $seenTokens[] = $ctx->options['headers']['Access-Token'] ?? null;
            if ($calls === 1) {
                return PromiseCreate::rejectionFor(new AuthException(RequestResponse::from([
                    'code' => 40100, 'message' => 'expired', 'request_id' => 'r', 'data' => [],
                ])));
            }
            return $this->resolved(0);
        })->wait();

        self::assertSame(2, $calls);
        self::assertSame(1, $refreshes);
        self::assertSame(['old', 'new'], $seenTokens);
        self::assertSame(0, $resp->getCode());
    }

    public function testOAuthRefreshOnlyRefreshesOnce(): void
    {
        $mw = new OAuthRefreshMiddleware(fn (): string => 't', fn (): string => 't2');

        $calls = 0;
        try {
            $mw->process($this->ctx(), function () use (&$calls): PromiseInterface {
                $calls++;
                return PromiseCreate::rejectionFor(new AuthException(RequestResponse::from([
                    'code' => 40100, 'message' => 'expired', 'request_id' => 'r', 'data' => [],
                ])));
            })->wait();
            self::fail('expected AuthException');
        } catch (AuthException) {
            self::assertSame(2, $calls);
        }
    }
}

final class MwDummyApi extends RequestApi
{
    protected string $address = 'x';
    protected RequestMethodEnum $method = RequestMethodEnum::GET;
}
