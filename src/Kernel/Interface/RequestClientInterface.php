<?php

namespace AdOceanSdk\Kernel\Interface;

use AdOceanSdk\RequestApi;

interface RequestClientInterface
{
    public static function make(): self;

    public function call(RequestApi|string $requestApi, RequestParamInterface|array $params = []): ResponseInterface;
}