<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AdvertiserAvatarGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserAvatarGetResponseData $data json返回值
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserAvatarGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertiser\Data\AdvertiserAvatarGetResponseData
    {
        return $this->data;
    }
}