<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 家装卡券素材
class PromotionCreatePostParamPromotionMaterialsDecorationMaterialData extends Data
{

    /**
     * @var string $image_mode 素材类型，仅支持传入CREATIVE_IMAGE_MODE_DECORATION_COUPON
     */
    public string $image_mode;
    
    /**
     * @var string $activity_id 活动ID，image_mode为家具卡券素材时填写
     */
    public string $activity_id;
    
}