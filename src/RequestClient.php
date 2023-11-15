<?php

namespace AdOceanSdk;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\RequestClientInterface;
use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\Kernel\Interface\ResponseInterface;

class RequestClient implements RequestClientInterface
{
    private int $timeout = 20;

    private string $accessToken = '';

    private string $domain = 'https://api.oceanengine.com/';

    private array $headers = [];

    private function __construct()
    {

    }

    public function setAccessToken($token): self
    {
        $this->accessToken = $token;

        return $this;
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function call(RequestApi|string $requestApi, RequestParamInterface|array $params = []): ResponseInterface&Data
    {
        $requestApi = is_string($requestApi) ? $requestApi::make() : $requestApi;
        $method     = match ($requestApi->getMethod()) {
            RequestMethodEnum::GET => 'GET',
            RequestMethodEnum::POST => 'POST',
        };
        $format     = match ($requestApi->getRequestFormat()) {
            RequestFormatEnum::BODY => RequestOptions::BODY,
            RequestFormatEnum::JSON => RequestOptions::JSON,
            RequestFormatEnum::QUERY => RequestOptions::QUERY,
            RequestFormatEnum::MULTIPART => RequestOptions::MULTIPART,
            RequestFormatEnum::FORM_PARAMS => RequestOptions::FORM_PARAMS,
        };
        if (!is_array($params)) {
            $params->validate();
            $params = $params->toArray();
        }
        $options[$format]   = $params;
        $options['headers'] = $requestApi->getHeaders();
        if ($requestApi->getTimeout()) {
            $options['timeout'] = $requestApi->getTimeout();
        }

        $response = $this->getHttpClient()
            ->request($method, $requestApi->getAddress(), $options);

        return RequestResponse::fromJsonString($response->getBody()->getContents());
    }

    public static function make(): self
    {
        return new self();
    }

    private function getHttpClient(): Client
    {
        return new Client([
            'base_uri' => $this->domain,
            'timeout'  => $this->timeout,
            'headers'  => [
                'Access-Token' => $this->accessToken,
                ...$this->headers
            ],
        ]);
    }

    public function setHeaders(array $headers): RequestClient
    {
        $this->headers = $headers;

        return $this;
    }

    public function addHeader(string $key, mixed $value): self
    {
        $this->headers[$key] = $value;

        return $this;
    }
}