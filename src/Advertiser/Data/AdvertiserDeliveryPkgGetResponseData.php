<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserDeliveryPkgGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgData $delivery_pkg 推广产品资质信息
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgData $delivery_pkg;
    
}