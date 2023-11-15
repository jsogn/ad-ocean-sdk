<?php

declare(strict_types=1);

namespace AdOceanSdk\Oauth\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AppAccessTokenPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Oauth\Data\AppAccessTokenPostResponseData $data json返回值
     */
    public \AdOceanSdk\Oauth\Data\AppAccessTokenPostResponseData $data;
    

    public function getData(): \AdOceanSdk\Oauth\Data\AppAccessTokenPostResponseData
    {
        return $this->data;
    }
}