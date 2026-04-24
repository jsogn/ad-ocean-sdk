<?php

declare(strict_types=1);

use AdOceanSdk\Kernel\Exceptions\ApiResponseException;
use AdOceanSdk\Kernel\Exceptions\MalformedResponseException;
use AdOceanSdk\Kernel\Exceptions\NetworkException;
use AdOceanSdk\Kernel\Interface\RequestClientInterface;
use AdOceanSdk\Kernel\Middleware\MiddlewareInterface;
use AdOceanSdk\Kernel\Middleware\RequestContext;
use AdOceanSdk\Application;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestClient;
use AdOceanSdk\RequestMethodEnum;
use AdOceanSdk\RequestResponse;
use AdOceanSdk\SdkConfig;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class RequestClientPipelineTest extends TestCase
{
    public function testGuzzleExceptionWrappedAsNetworkException(): void
    {
        $client = $this->makeClient(new MockHandler([new ConnectException('cannot connect', new Request('GET', '/'))]));

        try {
            $client->call(new RcGetApi());
            self::fail('expected NetworkException');
        } catch (NetworkException $e) {
            self::assertInstanceOf(GuzzleException::class, $e->getPrevious());
            self::assertSame('GET', $e->getRequestMethod());
            self::assertStringContainsString('open_api/2/test/', $e->getRequestUri());
        }
    }

    public function testThrowOnApiErrorEnabledViaConfig(): void
    {
        $config = SdkConfig::make()->setThrowOnApiError();
        $client = RequestClient::fromConfig($config);
        $client->setHttpClient($this->httpClientFor(new MockHandler([$this->okResp(50001, 'biz')])));

        $this->expectException(ApiResponseException::class);
        $this->expectExceptionCode(50001);
        $client->call(new RcGetApi());
    }

    public function testCallAsyncReturnsResponse(): void
    {
        $client = $this->makeClient(new MockHandler([$this->okResp(0, 'ok')]));

        $resp = $client->callAsync(new RcGetApi())->wait();

        self::assertInstanceOf(RequestResponse::class, $resp);
        self::assertSame(0, $resp->getCode());
    }

    public function testCallAsyncRejectionWrappedAsNetworkException(): void
    {
        $client = $this->makeClient(new MockHandler([new ConnectException('boom', new Request('GET', '/'))]));

        try {
            $client->callAsync(new RcGetApi())->wait();
            self::fail('expected NetworkException');
        } catch (NetworkException $e) {
            self::assertSame('GET', $e->getRequestMethod());
        }
    }

    public function testCallBatchSettlesAllAndPreservesKeys(): void
    {
        $client = $this->makeClient(new MockHandler([
            $this->okResp(0, 'a'),
            new ConnectException('x', new Request('GET', '/')),
            $this->okResp(0, 'b'),
        ]));

        $results = $client->callBatch([
            'first'  => new RcGetApi(),
            'second' => new RcGetApi(),
            'third'  => new RcGetApi(),
        ], concurrency: 5);

        self::assertSame(['first', 'second', 'third'], array_keys($results));
        self::assertInstanceOf(RequestResponse::class, $results['first']);
        self::assertInstanceOf(NetworkException::class, $results['second']);
        self::assertInstanceOf(RequestResponse::class, $results['third']);
    }

    public function testCallAsyncGoesThroughPipeline(): void
    {
        $client = $this->makeClient(new MockHandler([$this->okResp(50000, 'biz-fail')]));
        // 业务错误码也由 ApiErrorMiddleware 在异步路径生效
        $client->addMiddleware(new \AdOceanSdk\Kernel\Middleware\ApiErrorMiddleware([], []));

        $this->expectException(ApiResponseException::class);
        $client->callAsync(new RcGetApi())->wait();
    }

    public function testSetAccessTokenDoesNotResetHttpClient(): void
    {
        $client = $this->makeClient(new MockHandler([$this->okResp(0, 'ok')]));
        $http1 = $client->getHttpClient();
        $client->setAccessToken('abc');
        $http2 = $client->getHttpClient();
        self::assertSame($http1, $http2, 'setAccessToken 不应丢弃 Guzzle 实例（保护连接池）');
    }

    public function testAccessTokenInjectedIntoPerRequestHeaders(): void
    {
        $captured = null;
        $client = $this->makeClient(new MockHandler([$this->okResp(0, 'ok')]));
        $client->setAccessToken('tok-xyz');
        $client->addMiddleware(new class($captured) implements MiddlewareInterface {
            public function __construct(private mixed &$captured) {}
            public function process(RequestContext $context, callable $next): PromiseInterface
            {
                $this->captured = $context->options['headers']['Access-Token'] ?? null;
                return $next($context);
            }
        });

        $client->call(new RcGetApi());
        self::assertSame('tok-xyz', $captured);
    }

    public function testMalformedJsonThrowsMalformedResponseException(): void
    {
        $client = $this->makeClient(new MockHandler([new Response(200, [], 'not json {')]));

        $this->expectException(MalformedResponseException::class);
        $client->call(new RcGetApi());
    }

    public function testCustomClientImplementationCanBeInjectedIntoApplication(): void
    {
        $custom = new class implements RequestClientInterface {
            public int $calls = 0;
            public function call(\AdOceanSdk\RequestApi|string $a, \AdOceanSdk\Kernel\Interface\RequestParamInterface|array $p = []): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data {
                $this->calls++;
                return RequestResponse::from(['code' => 0, 'message' => 'ok', 'request_id' => 'r', 'data' => []]);
            }
            public function callAsync(\AdOceanSdk\RequestApi|string $a, \AdOceanSdk\Kernel\Interface\RequestParamInterface|array $p = []): PromiseInterface {
                return \GuzzleHttp\Promise\Create::promiseFor($this->call($a, $p));
            }
            public function callBatch(array $r, int $c = 10): array { return []; }
            public function request(\AdOceanSdk\RequestMethodEnum|string $m, string $u, array $p = [], ?\AdOceanSdk\RequestFormatEnum $f = null, array $h = [], ?int $t = null, ?string $d = null): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data { return $this->call(new RcGetApi(), $p); }
            public function requestAsync(\AdOceanSdk\RequestMethodEnum|string $m, string $u, array $p = [], ?\AdOceanSdk\RequestFormatEnum $f = null, array $h = [], ?int $t = null, ?string $d = null): PromiseInterface { return \GuzzleHttp\Promise\Create::promiseFor($this->request($m, $u, $p, $f, $h, $t, $d)); }
            public function get(string $u, array $q = [], array $h = [], ?int $t = null, ?string $d = null): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data { return $this->request(\AdOceanSdk\RequestMethodEnum::GET, $u, $q, \AdOceanSdk\RequestFormatEnum::QUERY, $h, $t, $d); }
            public function post(string $u, array $p = [], ?\AdOceanSdk\RequestFormatEnum $f = null, array $h = [], ?int $t = null, ?string $d = null): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data { return $this->request(\AdOceanSdk\RequestMethodEnum::POST, $u, $p, $f, $h, $t, $d); }
            public function put(string $u, array $p = [], ?\AdOceanSdk\RequestFormatEnum $f = null, array $h = [], ?int $t = null, ?string $d = null): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data { return $this->request(\AdOceanSdk\RequestMethodEnum::PUT, $u, $p, $f, $h, $t, $d); }
            public function patch(string $u, array $p = [], ?\AdOceanSdk\RequestFormatEnum $f = null, array $h = [], ?int $t = null, ?string $d = null): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data { return $this->request(\AdOceanSdk\RequestMethodEnum::PATCH, $u, $p, $f, $h, $t, $d); }
            public function delete(string $u, array $p = [], array $h = [], ?int $t = null, ?string $d = null): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data { return $this->request(\AdOceanSdk\RequestMethodEnum::DELETE, $u, $p, \AdOceanSdk\RequestFormatEnum::QUERY, $h, $t, $d); }
            public function setAccessToken(string $t): static { return $this; }
            public function getAccessToken(): string { return ''; }
            public function setHeaders(array $h): static { return $this; }
            public function addHeader(string $k, mixed $v): static { return $this; }
            public function getHeaders(): array { return []; }
            public function setDomain(string $d): static { return $this; }
            public function getDomain(): string { return ''; }
            public function setTimeout(int $t): static { return $this; }
            public function getTimeout(): int { return 0; }
            public function setHttpClient(Client $c): static { return $this; }
            public function getHttpClient(): Client { return new Client(); }
            public function setHttpClientOptions(array $o): static { return $this; }
            public function setLogger(\Psr\Log\LoggerInterface $l): static { return $this; }
            public function getLogger(): \Psr\Log\LoggerInterface { return new \Psr\Log\NullLogger(); }
            public function pipeline(): \AdOceanSdk\Kernel\Middleware\Pipeline { return new \AdOceanSdk\Kernel\Middleware\Pipeline(); }
            public function addMiddleware(MiddlewareInterface $m): static { return $this; }
            public function prependMiddleware(MiddlewareInterface $m): static { return $this; }
        };

        $app = Application::init($custom);
        self::assertSame($custom, $app->client());

        $api = new RcGetApi();
        $api->setClient($app->client())->call();
        self::assertSame(1, $custom->calls);
    }

    private function okResp(int $code, string $msg): Response
    {
        return new Response(200, [], json_encode(['code' => $code, 'message' => $msg, 'request_id' => 'r', 'data' => []], JSON_THROW_ON_ERROR));
    }

    private function makeClient(MockHandler $mock): RequestClient
    {
        return RequestClient::make()->setHttpClient($this->httpClientFor($mock));
    }

    private function httpClientFor(MockHandler $mock): Client
    {
        return new Client(['base_uri' => 'https://api.oceanengine.com/', 'handler' => HandlerStack::create($mock)]);
    }
}

final class RcGetApi extends RequestApi
{
    protected string $address = 'open_api/2/test/';
    protected RequestMethodEnum $method = RequestMethodEnum::GET;
}
