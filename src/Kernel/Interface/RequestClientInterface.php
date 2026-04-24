<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Interface;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Middleware\MiddlewareInterface;
use AdOceanSdk\Kernel\Middleware\Pipeline;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestFormatEnum;
use AdOceanSdk\RequestMethodEnum;
use GuzzleHttp\Client;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * SDK 请求客户端契约。
 *
 * 用户可自定义实现替换默认 RequestClient（通过 Application::init($customClient)），
 * 接口涵盖了 RequestApi/OpenApi 调用方需要使用的全部方法。
 *
 * 不在接口里强制 `make()` 静态工厂——具体类自行决定如何构造（DI 容器友好）。
 */
interface RequestClientInterface
{
    /* ---------- 调用入口 ---------- */

    /**
     * 同步发起请求，返回解码后的响应对象。
     */
    public function call(RequestApi|string $requestApi, RequestParamInterface|array $requestParams = []): ResponseInterface&Data;

    /**
     * 异步发起请求，返回 Promise（resolve 后是 RequestResponse）。
     * 与 sync `call()` 共用同一条 middleware pipeline。
     */
    public function callAsync(RequestApi|string $requestApi, RequestParamInterface|array $requestParams = []): PromiseInterface;

    /**
     * 并发执行多个请求，受 $concurrency 上限约束；
     * 任一失败不影响其他；返回值键与输入键一一对应，
     * 元素为 RequestResponse 或捕获到的 Throwable。
     *
     * @param array<string|int, RequestApi|array{0: RequestApi|string, 1?: RequestParamInterface|array}> $requests
     * @return array<string|int, \AdOceanSdk\RequestResponse|\Throwable>
     */
    public function callBatch(array $requests, int $concurrency = 10): array;

    /**
     * 直接按 HTTP 方法 + URI 发起请求，但仍复用 SDK 的 middleware、鉴权、异常与响应解码链路。
     * 适合临时接口、灰度接口或尚未生成 RequestApi 的场景。
     *
     * @param RequestMethodEnum|string $method
     * @param array<string, mixed> $params
     * @param array<string, mixed> $headers
     */
    public function request(
        RequestMethodEnum|string $method,
        string $uri,
        array $params = [],
        ?RequestFormatEnum $format = null,
        array $headers = [],
        ?int $timeout = null,
        ?string $domain = null,
    ): ResponseInterface&Data;

    /**
     * 异步版 direct request。
     *
     * @param RequestMethodEnum|string $method
     * @param array<string, mixed> $params
     * @param array<string, mixed> $headers
     */
    public function requestAsync(
        RequestMethodEnum|string $method,
        string $uri,
        array $params = [],
        ?RequestFormatEnum $format = null,
        array $headers = [],
        ?int $timeout = null,
        ?string $domain = null,
    ): PromiseInterface;

    /** @param array<string, mixed> $query @param array<string, mixed> $headers */
    public function get(string $uri, array $query = [], array $headers = [], ?int $timeout = null, ?string $domain = null): ResponseInterface&Data;

    /** @param array<string, mixed> $data @param array<string, mixed> $headers */
    public function post(string $uri, array $data = [], ?RequestFormatEnum $format = null, array $headers = [], ?int $timeout = null, ?string $domain = null): ResponseInterface&Data;

    /** @param array<string, mixed> $data @param array<string, mixed> $headers */
    public function put(string $uri, array $data = [], ?RequestFormatEnum $format = null, array $headers = [], ?int $timeout = null, ?string $domain = null): ResponseInterface&Data;

    /** @param array<string, mixed> $data @param array<string, mixed> $headers */
    public function patch(string $uri, array $data = [], ?RequestFormatEnum $format = null, array $headers = [], ?int $timeout = null, ?string $domain = null): ResponseInterface&Data;

    /** @param array<string, mixed> $params @param array<string, mixed> $headers */
    public function delete(string $uri, array $params = [], array $headers = [], ?int $timeout = null, ?string $domain = null): ResponseInterface&Data;

    /* ---------- 鉴权 / Header ---------- */

    public function setAccessToken(string $token): static;

    public function getAccessToken(): string;

    public function setHeaders(array $headers): static;

    public function addHeader(string $key, mixed $value): static;

    public function getHeaders(): array;

    /* ---------- 网络层配置 ---------- */

    public function setDomain(string $domain): static;

    public function getDomain(): string;

    public function setTimeout(int $timeout): static;

    public function getTimeout(): int;

    /**
     * 注入用户自带的 Guzzle Client（可携带自定义 HandlerStack/proxy/cert/cookies）。
     */
    public function setHttpClient(Client $client): static;

    public function getHttpClient(): Client;

    /**
     * 透传给 Guzzle Client 构造的额外选项；调用此方法会丢弃当前 client 实例。
     *
     * @param array<string, mixed> $options
     */
    public function setHttpClientOptions(array $options): static;

    /* ---------- 日志 ---------- */

    public function setLogger(LoggerInterface $logger): static;

    public function getLogger(): LoggerInterface;

    /* ---------- Middleware ---------- */

    public function pipeline(): Pipeline;

    public function addMiddleware(MiddlewareInterface $middleware): static;

    public function prependMiddleware(MiddlewareInterface $middleware): static;
}
