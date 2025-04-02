<?php

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Interface\InterceptorInterface;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\RequestClientInterface;
use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\Kernel\Interface\ResponseInterface;

class RequestClient implements RequestClientInterface
{
    private int $timeout = 20;

    private string $domain = 'https://api.oceanengine.com/';

    private array $headers = [];

    private InterceptorInterface $interceptor;

    private function __construct()
    {
        $this->interceptor = new RequestClientInterceptor();
    }

    public function setAccessToken($token): self
    {
        $this->headers['Access-Token'] = $token;

        return $this;
    }

    public function getAccessToken(): string
    {
        return $this->headers['Access-Token'] ?? '';
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function call(RequestApi|string $requestApi, RequestParamInterface|array $requestParams = []): ResponseInterface&Data
    {
        $requestApi = is_string($requestApi) ? $requestApi::make() : $requestApi;
        if (!is_array($requestParams)) {
            $requestParams = $requestParams->toArray();
        }

        if (RequestFormatEnum::QUERY === $requestApi->getRequestFormat()) {
            foreach ($requestParams as &$value) {
                if (is_array($value)) {
                    $value = json_encode($value);
                }
            }
        }

        $requestMethod = match ($requestApi->getMethod()) {
            RequestMethodEnum::GET => 'GET',
            RequestMethodEnum::POST => 'POST',
        };

        $paramsFormat = match ($requestApi->getRequestFormat()) {
            RequestFormatEnum::BODY => RequestOptions::BODY,
            RequestFormatEnum::JSON => RequestOptions::JSON,
            RequestFormatEnum::QUERY => RequestOptions::QUERY,
            RequestFormatEnum::MULTIPART => RequestOptions::MULTIPART,
            RequestFormatEnum::FORM_PARAMS => RequestOptions::FORM_PARAMS,
        };

        $requestParams          = $this->interceptor->params($requestParams, $requestApi);
        $options[$paramsFormat] = $requestParams;
        $options['headers']     = [...$this->headers, ...$requestApi->getHeaders()];

        if ($requestApi->getTimeout()) {
            $options['timeout'] = $requestApi->getTimeout();
        }

        $options    = $this->interceptor->options($options);
        $requestApi = $this->interceptor->request($requestApi, $requestParams, $options);

        try {
            $response = $this->getHttpClient()
                ->request($requestMethod, $requestApi->getAddress(), $options);
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            $this->interceptor->exception($e);
            throw $e;
        }

        return $this->interceptor->response($response, $requestApi, $requestParams, $options);
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
            'headers'  => $this->headers
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

    public function setInterceptor(InterceptorInterface $interceptor): RequestClient
    {
        $this->interceptor = $interceptor;

        return $this;
    }

    public function setTimeout(int $timeout): RequestClient
    {
        $this->timeout = $timeout;

        return $this;
    }
}