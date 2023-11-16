<?php

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Interface\InterceptorInterface;

class RequestClientInterceptor implements InterceptorInterface
{

    public function request(array $options): array
    {
        return $options;
    }

    public function response(RequestResponse $response): RequestResponse
    {
        return $response;
    }
}