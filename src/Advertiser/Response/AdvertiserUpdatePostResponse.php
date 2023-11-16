<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AdvertiserUpdatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserUpdatePostResponseData $data json返回值
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserUpdatePostResponseData $data;
    

    public function getData(): \AdOceanSdk\Advertiser\Data\AdvertiserUpdatePostResponseData
    {
        return $this->data;
    }
}