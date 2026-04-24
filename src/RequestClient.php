<?php

declare(strict_types=1);

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Exceptions\MalformedResponseException;
use AdOceanSdk\Kernel\Exceptions\NetworkException;
use AdOceanSdk\Kernel\Interface\RequestClientInterface;
use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Middleware\LoggingMiddleware;
use AdOceanSdk\Kernel\Middleware\MiddlewareInterface;
use AdOceanSdk\Kernel\Middleware\Pipeline;
use AdOceanSdk\Kernel\Middleware\RequestContext;
use AdOceanSdk\Kernel\Support\InlineRequestApi;
use GuzzleHttp\Client;
use GuzzleHttp\Promise\Create as PromiseCreate;
use GuzzleHttp\Promise\Each as PromiseEach;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface as PsrResponseInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * 默认 RequestClient 实现。
 *
 * 设计要点：
 *  - 同一条 Promise 化的 middleware pipeline 同时服务 sync `call()` 与 async `callAsync()`。
 *  - access-token / 业务 headers **不写入 Guzzle base 配置**，统一在 buildContext 时
 *    合并到 per-request options，避免修改头部即销毁 Guzzle Client（保护连接池复用）。
 *  - 用户可通过 setHttpClient() 注入自带 HandlerStack 的 Guzzle Client。
 *  - 多账号场景：推荐使用 middleware 在 RequestContext 上按 params 注入不同 token，
 *    setAccessToken() 仅作单账号便捷 API。
 */
class RequestClient implements RequestClientInterface
{
    private string $domain = 'https://api.oceanengine.com/';

    private int $timeout = 20;

    /** 业务级 base headers（含 Access-Token），buildContext 时合并进 per-request options */
    private array $headers = [];

    private ?Client $httpClient = null;

    /** 用户自定义透传给 Guzzle 的额外选项 */
    private array $httpClientOptions = [];

    private LoggerInterface $logger;

    private Pipeline $pipeline;

    private function __construct(?SdkConfig $config = null)
    {
        $this->logger   = new NullLogger();
        $this->pipeline = new Pipeline();

        if ($config) {
            $this->domain  = $config->getDomain();
            $this->timeout = $config->getTimeout();
            $this->headers = $config->getHeaders();
            if ($logger = $config->getLogger()) {
                $this->logger = $logger;
            }
            if ($http = $config->getHttpClient()) {
                $this->httpClient = $http;
            }
            if ($opts = $config->getHttpClientOptions()) {
                $this->httpClientOptions = $opts;
            }
        }

        $this->initDefaultPipeline($config);
    }

    public static function make(): static
    {
        return new static();
    }

    public static function fromConfig(SdkConfig $config): static
    {
        return new static($config);
    }

    /* ===================== 调用入口 ===================== */

    public function call(RequestApi|string $requestApi, RequestParamInterface|array $requestParams = []): ResponseInterface&Data
    {
        return $this->callAsync($requestApi, $requestParams)->wait();
    }

    public function callAsync(RequestApi|string $requestApi, RequestParamInterface|array $requestParams = []): PromiseInterface
    {
        $context = $this->buildContext($requestApi, $requestParams);

        return $this->pipeline->handle($context, fn (RequestContext $ctx): PromiseInterface => $this->dispatch($ctx));
    }

    public function callBatch(array $requests, int $concurrency = 10): array
    {
        if ($requests === []) {
            return [];
        }

        $concurrency = max(1, $concurrency);
        $results = [];

        $promiseGenerator = function () use ($requests): \Generator {
            foreach ($requests as $key => $entry) {
                if ($entry instanceof RequestApi) {
                    yield $key => $this->callAsync($entry);
                    continue;
                }
                yield $key => $this->callAsync($entry[0], $entry[1] ?? []);
            }
        };

        PromiseEach::ofLimit(
            $promiseGenerator(),
            $concurrency,
            static function ($value, $key) use (&$results): void {
                $results[$key] = $value;
            },
            static function ($reason, $key) use (&$results): void {
                $results[$key] = $reason instanceof \Throwable
                    ? $reason
                    : new \RuntimeException(is_string($reason) ? $reason : 'Promise rejected');
            },
        )->wait();

        // 保留输入顺序
        $ordered = [];
        foreach (array_keys($requests) as $k) {
            $ordered[$k] = $results[$k] ?? null;
        }

        return $ordered;
    }

    public function request(
        RequestMethodEnum|string $method,
        string $uri,
        array $params = [],
        ?RequestFormatEnum $format = null,
        array $headers = [],
        ?int $timeout = null,
        ?string $domain = null,
    ): ResponseInterface&Data {
        return $this->call($this->makeInlineApi($method, $uri, $format, $headers, $timeout, $domain), $params);
    }

    public function requestAsync(
        RequestMethodEnum|string $method,
        string $uri,
        array $params = [],
        ?RequestFormatEnum $format = null,
        array $headers = [],
        ?int $timeout = null,
        ?string $domain = null,
    ): PromiseInterface {
        return $this->callAsync($this->makeInlineApi($method, $uri, $format, $headers, $timeout, $domain), $params);
    }

    public function get(string $uri, array $query = [], array $headers = [], ?int $timeout = null, ?string $domain = null): ResponseInterface&Data
    {
        return $this->request(RequestMethodEnum::GET, $uri, $query, RequestFormatEnum::QUERY, $headers, $timeout, $domain);
    }

    public function post(string $uri, array $data = [], ?RequestFormatEnum $format = null, array $headers = [], ?int $timeout = null, ?string $domain = null): ResponseInterface&Data
    {
        return $this->request(RequestMethodEnum::POST, $uri, $data, $format, $headers, $timeout, $domain);
    }

    public function put(string $uri, array $data = [], ?RequestFormatEnum $format = null, array $headers = [], ?int $timeout = null, ?string $domain = null): ResponseInterface&Data
    {
        return $this->request(RequestMethodEnum::PUT, $uri, $data, $format, $headers, $timeout, $domain);
    }

    public function patch(string $uri, array $data = [], ?RequestFormatEnum $format = null, array $headers = [], ?int $timeout = null, ?string $domain = null): ResponseInterface&Data
    {
        return $this->request(RequestMethodEnum::PATCH, $uri, $data, $format, $headers, $timeout, $domain);
    }

    public function delete(string $uri, array $params = [], array $headers = [], ?int $timeout = null, ?string $domain = null): ResponseInterface&Data
    {
        return $this->request(RequestMethodEnum::DELETE, $uri, $params, RequestFormatEnum::QUERY, $headers, $timeout, $domain);
    }

    /* ===================== Headers / Token ===================== */

    public function setAccessToken(string $token): static
    {
        $this->headers['Access-Token'] = $token;
        return $this;
    }

    public function getAccessToken(): string
    {
        return $this->headers['Access-Token'] ?? '';
    }

    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;
        return $this;
    }

    public function addHeader(string $key, mixed $value): static
    {
        $this->headers[$key] = $value;
        return $this;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    /* ===================== Network ===================== */

    public function setDomain(string $domain): static
    {
        $this->domain = rtrim($domain, '/') . '/';
        $this->httpClient = null; // base_uri 改了必须重建
        return $this;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function setTimeout(int $timeout): static
    {
        $this->timeout = $timeout;
        $this->httpClient = null; // 默认 timeout 改了重建
        return $this;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function setHttpClient(Client $client): static
    {
        $this->httpClient = $client;
        return $this;
    }

    public function getHttpClient(): Client
    {
        if ($this->httpClient === null) {
            $defaults = [
                'base_uri' => $this->domain,
                'timeout'  => $this->timeout,
            ];
            $this->httpClient = new Client(array_replace($defaults, $this->httpClientOptions));
        }

        return $this->httpClient;
    }

    public function setHttpClientOptions(array $options): static
    {
        $this->httpClientOptions = $options;
        $this->httpClient = null;
        return $this;
    }

    /* ===================== Logging ===================== */

    public function setLogger(LoggerInterface $logger): static
    {
        $this->logger = $logger;
        return $this;
    }

    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }

    /* ===================== Middleware ===================== */

    public function pipeline(): Pipeline
    {
        return $this->pipeline;
    }

    public function addMiddleware(MiddlewareInterface $middleware): static
    {
        $this->pipeline->push($middleware);
        return $this;
    }

    public function prependMiddleware(MiddlewareInterface $middleware): static
    {
        $this->pipeline->prepend($middleware);
        return $this;
    }

    /* ===================== Internals ===================== */

    private function initDefaultPipeline(?SdkConfig $config): void
    {
        $this->pipeline->push(new LoggingMiddleware($this->logger));

        if ($config === null) {
            return;
        }

        if ($retry = $config->getRetryMiddleware()) {
            $this->pipeline->push($retry);
        }

        if ($oauth = $config->getOAuthMiddleware()) {
            $this->pipeline->push($oauth);
        }

        foreach ($config->getMiddlewares() as $middleware) {
            $this->pipeline->push($middleware);
        }

        if ($apiError = $config->getApiErrorMiddleware()) {
            $this->pipeline->push($apiError);
        }
    }

    private function buildContext(RequestApi|string $requestApi, RequestParamInterface|array $requestParams): RequestContext
    {
        $api = is_string($requestApi) ? $requestApi::make() : $requestApi;
        $params = is_array($requestParams) ? $requestParams : $requestParams->toArray();

        $method = $api->getMethod()->httpName();

        $format = $api->getRequestFormat();
        if ($format === RequestFormatEnum::QUERY) {
            // OceanEngine 协议特例：GET 参数中的 array 字段需 JSON 编码后作为 query 串
            foreach ($params as &$value) {
                if (is_array($value)) {
                    $value = json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
                }
            }
            unset($value);
        }

        $paramsFormat = match ($format) {
            RequestFormatEnum::BODY        => RequestOptions::BODY,
            RequestFormatEnum::JSON        => RequestOptions::JSON,
            RequestFormatEnum::QUERY       => RequestOptions::QUERY,
            RequestFormatEnum::MULTIPART   => RequestOptions::MULTIPART,
            RequestFormatEnum::FORM_PARAMS => RequestOptions::FORM_PARAMS,
        };

        $headers = [...$this->headers, ...$api->getHeaders()];

        $options = [
            $paramsFormat => $params,
            'headers'     => $headers,
        ];

        if ($api->getTimeout()) {
            $options['timeout'] = $api->getTimeout();
        }

        return new RequestContext(
            api:     $api,
            method:  $method,
            uri:     $this->resolveRequestUri($api),
            params:  $params,
            options: $options,
        );
    }

    private function makeInlineApi(
        RequestMethodEnum|string $method,
        string $uri,
        ?RequestFormatEnum $format,
        array $headers,
        ?int $timeout,
        ?string $domain,
    ): InlineRequestApi {
        $resolvedMethod = is_string($method) ? RequestMethodEnum::fromString($method) : $method;

        return InlineRequestApi::fromRequest(
            address: $uri,
            method: $resolvedMethod,
            requestFormat: $format ?? $resolvedMethod->defaultRequestFormat(),
            headers: $headers,
            timeout: $timeout,
            domain: $domain,
        );
    }

    private function dispatch(RequestContext $context): PromiseInterface
    {
        try {
            $promise = $this->getHttpClient()->requestAsync($context->method, $context->uri, $context->options);
        } catch (\Throwable $e) {
            // 极少数 Guzzle 在构造请求阶段直接抛同步异常的场景
            return PromiseCreate::rejectionFor($this->wrapAsNetworkException($context, $e));
        }

        return $promise->then(
            fn (PsrResponseInterface $response): RequestResponse => $this->decodeResponse($response),
            function (\Throwable $e) use ($context): never {
                throw $this->wrapAsNetworkException($context, $e);
            },
        );
    }

    private function decodeResponse(PsrResponseInterface $response): RequestResponse
    {
        $body = (string) $response->getBody();

        try {
            $payload = json_decode($body, true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            throw new MalformedResponseException(
                'Failed to decode JSON response: ' . $e->getMessage(),
                $body,
                $e,
            );
        }

        if (!is_array($payload)) {
            throw new MalformedResponseException('Decoded response payload is not an array', $body);
        }

        return RequestResponse::from($payload);
    }

    private function wrapAsNetworkException(RequestContext $context, \Throwable $e): NetworkException
    {
        if ($e instanceof NetworkException) {
            return $e;
        }

        return new NetworkException(
            sprintf('HTTP request failed: %s %s — %s', $context->method, $context->uri, $e->getMessage()),
            $context->method,
            $context->uri,
            $e,
        );
    }

    private function resolveRequestUri(RequestApi $requestApi): string
    {
        $address = $requestApi->getAddress();

        if (preg_match('/^https?:\/\//', $address) === 1) {
            return $address;
        }

        $domain = $requestApi->getDomain();
        if ($domain === null) {
            return $address;
        }

        return rtrim($domain, '/') . '/' . ltrim($address, '/');
    }
}
