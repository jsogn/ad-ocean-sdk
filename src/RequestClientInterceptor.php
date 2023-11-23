<?php

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Interface\InterceptorInterface;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class RequestClientInterceptor implements InterceptorInterface
{

    public function options(array $options): array
    {
        return $options;
    }

    public function params(array $params, RequestApi $requestApi): array
    {
        return $params;
    }

    public function response(ResponseInterface $requestResponse, RequestApi $requestApi, array $requestParams, array $options): RequestResponse
    {
        $responseArray = json_decode($requestResponse->getBody()->getContents(), true);

        return RequestResponse::from($responseArray);
    }

    public function request(RequestApi $requestApi, array $requestParams, array $options): RequestApi
    {
        return $requestApi;
    }

    /**
     * @param GuzzleException $exception
     * @return void
     * @throws GuzzleException
     */
    public function exception(GuzzleException $exception): void
    {
        throw $exception;
    }
}