<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserDeliveryPkgConfigGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgConfigGetResponseIndustryConfigData $industry_config 资质规则
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgConfigGetResponseIndustryConfigData $industry_config;
    
}