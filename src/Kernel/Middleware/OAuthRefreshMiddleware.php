<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Middleware;

use AdOceanSdk\Kernel\Exceptions\AuthException;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * OAuth Access-Token 失效自动刷新。
 *
 * - getter()  返回当前 token；中间件用其填充 Access-Token header
 * - refresher() 返回新 token；当下游返回 AuthException 时调用一次后重试
 *
 * 同一上下文最多刷新一次（通过 attribute 标记），避免循环。
 */
final class OAuthRefreshMiddleware implements MiddlewareInterface
{
    /** @var \Closure(): ?string */
    private \Closure $getter;

    /** @var \Closure(): string */
    private \Closure $refresher;

    /**
     * @param callable(): ?string $tokenGetter
     * @param callable(): string  $tokenRefresher
     */
    public function __construct(callable $tokenGetter, callable $tokenRefresher)
    {
        $this->getter = \Closure::fromCallable($tokenGetter);
        $this->refresher = \Closure::fromCallable($tokenRefresher);
    }

    public function process(RequestContext $context, callable $next): PromiseInterface
    {
        $context = $this->applyToken($context, ($this->getter)());

        return $next($context)->otherwise(function (\Throwable $e) use ($context, $next): PromiseInterface {
            if (!($e instanceof AuthException)) {
                throw $e;
            }
            if ($context->getAttribute('oauth.refreshed') === true) {
                throw $e;
            }

            $newToken = ($this->refresher)();
            $retryContext = $this->applyToken($context, $newToken)
                ->withAttribute('oauth.refreshed', true);

            return $next($retryContext);
        });
    }

    private function applyToken(RequestContext $context, ?string $token): RequestContext
    {
        if ($token === null || $token === '') {
            return $context;
        }

        $headers = $context->options['headers'] ?? [];
        $headers['Access-Token'] = $token;

        return $context->withOption('headers', $headers);
    }
}
