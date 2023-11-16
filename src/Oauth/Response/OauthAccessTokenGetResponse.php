<?php

namespace AdOceanSdk\Oauth\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;
use AdOceanSdk\Oauth\Data\OauthAccessTokenGetData;
use ClassTransformer\Attributes\ConvertArray;

class OauthAccessTokenGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;

    #[ConvertArray(OauthAccessTokenGetData::class)]
    public OauthAccessTokenGetData $data;

    public function getData(): OauthAccessTokenGetData
    {
        return $this->data;
    }
}