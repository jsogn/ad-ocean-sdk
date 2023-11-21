<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserDeliveryPkgSubmitPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgData $delivery_pkg 推广产品资质
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgData $delivery_pkg;
    
}