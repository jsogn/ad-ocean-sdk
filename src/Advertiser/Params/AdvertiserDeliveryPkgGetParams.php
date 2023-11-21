<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserDeliveryPkgGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $pkg_id 推广产品组id，是推广产品的组标识
     */
    public int $pkg_id;
    
}