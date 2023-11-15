<?php

namespace AdOceanSdk\Oauth\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;
use AdOceanSdk\Oauth\Data\AccessTokenGetData;

class RefreshTokenPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;

    public AccessTokenGetData $data;

    public function getData(): AccessTokenGetData
    {
        return $this->data;
    }
}