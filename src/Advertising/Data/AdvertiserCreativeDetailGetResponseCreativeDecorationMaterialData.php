<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 家装卡券素材
class AdvertiserCreativeDetailGetResponseCreativeDecorationMaterialData extends Data
{

    /**
     * @var string $image_mode 素材类型
     */
    public string $image_mode;
    
    /**
     * @var string $activity_id 活动ID
     */
    public string $activity_id;
    
}