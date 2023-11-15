<?php

namespace AdOceanSdk\Oauth\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;
use AdOceanSdk\Oauth\Data\AccessTokenGetData;
use ClassTransformer\Attributes\ConvertArray;

class AccessTokenGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;

    #[ConvertArray(AccessTokenGetData::class)]
    public AccessTokenGetData $data;

    public function getData(): AccessTokenGetData
    {
        return $this->data;
    }
}