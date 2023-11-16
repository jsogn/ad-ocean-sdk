<?php

namespace AdOceanSdk\Kernel\Interface;

use AdOceanSdk\RequestResponse;

interface InterceptorInterface
{
    public function request(array $options): array;

    public function response(RequestResponse $response): RequestResponse;
}