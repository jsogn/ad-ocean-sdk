<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserDeliveryQualificationSubmitPostResponseData extends Data
{

    /**
     * @var array<int> $qualification_ids 资质id列表
     */
    public array $qualification_ids;
    
}