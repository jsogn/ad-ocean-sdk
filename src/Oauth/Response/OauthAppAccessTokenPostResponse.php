<?php

declare(strict_types=1);

namespace AdOceanSdk\Oauth\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class OauthAppAccessTokenPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Oauth\Data\OauthAppAccessTokenPostResponseData $data json返回值
     */
    public \AdOceanSdk\Oauth\Data\OauthAppAccessTokenPostResponseData $data;
    

    public function getData(): \AdOceanSdk\Oauth\Data\OauthAppAccessTokenPostResponseData
    {
        return $this->data;
    }
}