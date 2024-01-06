<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 家装卡券素材
class PromotionListGetResponseListPromotionMaterialsDecorationMaterialData extends Data
{

    /**
     * @var int $material_id 素材id
     */
    public int $material_id;
    
    /**
     * @var string $image_mode 素材类型
     */
    public string $image_mode;
    
    /**
     * @var string $activity_id 活动ID
     */
    public string $activity_id;
    
}