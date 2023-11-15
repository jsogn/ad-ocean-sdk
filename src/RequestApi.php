<?php

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Interface\RequestClientInterface;
use AdOceanSdk\Kernel\Interface\RequestParamInterface;

abstract class RequestApi
{
    protected ?string $domain = null;

    protected string $address;

    protected RequestMethodEnum $method;

    protected array $headers = [];

    protected ?int $timeout = null;

    protected ?RequestFormatEnum $requestFormat = null;

    protected ?RequestClientInterface $requestClient = null;

    public static function make(RequestParamInterface|array $params = []): static
    {
        return new static();
    }

    public function getRequestFormat(): RequestFormatEnum
    {
        if ($this->requestFormat) {
            return $this->requestFormat;
        }

        return RequestFormatEnum::JSON;
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

    public function setClient(RequestClientInterface &$client): static
    {
        $this->requestClient = $client;

        return $this;
    }

    /**
     * @param RequestParamInterface|array $params
     * @return Kernel\Interface\ResponseInterface
     */
    public function call(RequestParamInterface|array $params = [])
    {
        return $this->requestClient->call($this, $params);
    }
}