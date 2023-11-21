<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AdvertiserQualificationGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserQualificationGetResponseData $data 返回数据
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserQualificationGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertiser\Data\AdvertiserQualificationGetResponseData
    {
        return $this->data;
    }
}