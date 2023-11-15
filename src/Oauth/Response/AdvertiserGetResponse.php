<?php

declare(strict_types=1);

namespace AdOceanSdk\Oauth\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AdvertiserGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Oauth\Data\AdvertiserGetResponseData $data json返回值
     */
    public \AdOceanSdk\Oauth\Data\AdvertiserGetResponseData $data;
    

    public function getData(): \AdOceanSdk\Oauth\Data\AdvertiserGetResponseData
    {
        return $this->data;
    }
}