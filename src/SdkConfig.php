<?php

declare(strict_types=1);

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Config\ErrorCodeDefaults;
use AdOceanSdk\Kernel\Middleware\ApiErrorMiddleware;
use AdOceanSdk\Kernel\Middleware\MiddlewareInterface;
use AdOceanSdk\Kernel\Middleware\OAuthRefreshMiddleware;
use AdOceanSdk\Kernel\Middleware\RetryMiddleware;
use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;

class SdkConfig
{
    private string $domain = 'https://api.oceanengine.com/';

    private int $timeout = 20;

    private array $headers = [];

    private ?LoggerInterface $logger = null;

    private ?Client $httpClient = null;

    /** @var array<string, mixed> */
    private array $httpClientOptions = [];

    private ?ApiErrorMiddleware $apiErrorMiddleware = null;

    private ?RetryMiddleware $retryMiddleware = null;

    private ?OAuthRefreshMiddleware $oauthMiddleware = null;

    /** @var list<MiddlewareInterface> */
    private array $middlewares = [];

    public static function make(): self
    {
        return new self();
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->domain = rtrim($domain, '/') . '/';

        return $this;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function setTimeout(int $timeout): self
    {
        $this->timeout = $timeout;

        return $this;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    public function addHeader(string $key, mixed $value): self
    {
        $this->headers[$key] = $value;

        return $this;
    }

    public function setAccessToken(string $token): self
    {
        return $this->addHeader('Access-Token', $token);
    }

    public function getLogger(): ?LoggerInterface
    {
        return $this->logger;
    }

    public function setLogger(LoggerInterface $logger): self
    {
        $this->logger = $logger;

        return $this;
    }

    public function getHttpClient(): ?Client
    {
        return $this->httpClient;
    }

    /**
     * 注入用户自带的 Guzzle Client（携带自定义 HandlerStack/proxy/cert/cookies 等）。
     */
    public function setHttpClient(?Client $client): self
    {
        $this->httpClient = $client;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getHttpClientOptions(): array
    {
        return $this->httpClientOptions;
    }

    /**
     * 透传给 Guzzle Client 构造的额外选项（与默认 base_uri/timeout 合并）。
     *
     * @param array<string, mixed> $options
     */
    public function setHttpClientOptions(array $options): self
    {
        $this->httpClientOptions = $options;

        return $this;
    }

    /**
     * 启用业务码错误抛出（ApiErrorMiddleware）。
     *
     * @param list<int>|null $authErrorCodes
     * @param list<int>|null $rateLimitErrorCodes
     */
    public function setThrowOnApiError(bool $enabled = true, ?array $authErrorCodes = null, ?array $rateLimitErrorCodes = null): self
    {
        if (!$enabled) {
            $this->apiErrorMiddleware = null;
            return $this;
        }

        $this->apiErrorMiddleware = new ApiErrorMiddleware(
            $authErrorCodes ?? ErrorCodeDefaults::AUTH_ERROR_CODES,
            $rateLimitErrorCodes ?? ErrorCodeDefaults::RATE_LIMIT_ERROR_CODES,
        );

        return $this;
    }

    public function getApiErrorMiddleware(): ?ApiErrorMiddleware
    {
        return $this->apiErrorMiddleware;
    }

    /**
     * 启用重试策略（RetryMiddleware）。
     */
    public function setRetryPolicy(int $maxAttempts = 3, int $baseDelayMs = 200, int $maxDelayMs = 5000): self
    {
        $this->retryMiddleware = new RetryMiddleware($maxAttempts, $baseDelayMs, $maxDelayMs);

        return $this;
    }

    public function setRetryMiddleware(?RetryMiddleware $middleware): self
    {
        $this->retryMiddleware = $middleware;

        return $this;
    }

    public function getRetryMiddleware(): ?RetryMiddleware
    {
        return $this->retryMiddleware;
    }

    /**
     * 启用 OAuth Access-Token 失效自动刷新。
     *
     * @param callable(): ?string $tokenGetter
     * @param callable(): string  $tokenRefresher
     */
    public function setOAuthTokenProvider(callable $tokenGetter, callable $tokenRefresher): self
    {
        $this->oauthMiddleware = new OAuthRefreshMiddleware($tokenGetter, $tokenRefresher);

        return $this;
    }

    public function getOAuthMiddleware(): ?OAuthRefreshMiddleware
    {
        return $this->oauthMiddleware;
    }

    public function addMiddleware(MiddlewareInterface $middleware): self
    {
        $this->middlewares[] = $middleware;

        return $this;
    }

    /**
     * @return list<MiddlewareInterface>
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}
