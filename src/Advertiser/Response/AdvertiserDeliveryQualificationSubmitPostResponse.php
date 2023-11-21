<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AdvertiserDeliveryQualificationSubmitPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryQualificationSubmitPostResponseData $data json返回值
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryQualificationSubmitPostResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryQualificationSubmitPostResponseData
    {
        return $this->data;
    }
}