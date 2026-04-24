<?php

declare(strict_types=1);

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\RequestClientInterface;
use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

abstract class RequestApi
{
    protected ?string $domain = null;

    protected string $address;

    protected RequestMethodEnum $method;

    protected array $headers = [];

    protected ?int $timeout = null;

    protected ?RequestFormatEnum $requestFormat = null;

    protected ?RequestClientInterface $requestClient = null;

    public function __construct()
    {
        // 不再在构造时 new client；按需懒加载，避免独立 API 调用浪费 Guzzle 实例
    }

    public static function make(): static
    {
        return new static();
    }

    public function getRequestFormat(): RequestFormatEnum
    {
        if ($this->requestFormat) {
            return $this->requestFormat;
        }

        return $this->method->defaultRequestFormat();
    }

    public function setRequestFormat(?RequestFormatEnum $requestFormat): static
    {
        $this->requestFormat = $requestFormat;
        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getMethod(): RequestMethodEnum
    {
        return $this->method;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function setHeaders(array $headers): static
    {
        $this->headers = [
            ...$this->headers,
            ...$headers,
        ];
        return $this;
    }

    public function getTimeout(): ?int
    {
        return $this->timeout;
    }

    public function setTimeout(int $timeout): static
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function setClient(RequestClientInterface $client): static
    {
        $this->requestClient = $client;
        return $this;
    }

    public function getClient(): RequestClientInterface
    {
        return $this->requestClient ??= RequestClient::make();
    }

    public function call(RequestParamInterface|array $params = []): ResponseInterface&Data
    {
        return $this->getClient()->call($this, $params);
    }

    public function callAsync(RequestParamInterface|array $params = []): PromiseInterface
    {
        return $this->getClient()->callAsync($this, $params);
    }
}
