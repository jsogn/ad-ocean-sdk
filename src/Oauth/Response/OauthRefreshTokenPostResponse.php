<?php

namespace AdOceanSdk\Oauth\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;
use AdOceanSdk\Oauth\Data\OauthAccessTokenGetData;

class OauthRefreshTokenPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;

    public OauthAccessTokenGetData $data;

    public function getData(): OauthAccessTokenGetData
    {
        return $this->data;
    }
}