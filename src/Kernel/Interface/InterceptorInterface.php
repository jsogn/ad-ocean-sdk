<?php

namespace AdOceanSdk\Kernel\Interface;

use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestResponse;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

interface InterceptorInterface
{
    public function request(RequestApi $requestApi, array $requestParams, array $options): RequestApi;

    public function options(array $options): array;

    public function response(ResponseInterface $requestResponse, RequestApi $requestApi, array $requestParams, array $options): RequestResponse;

    public function params(array $params, RequestApi $requestApi): array;

    public function exception(GuzzleException $exception): void;
}