<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 创意图片素材
class PromotionListGetResponseListPromotionMaterialsImageMaterialListData extends Data
{

    /**
     * @var string $image_mode 素材类型
     */
    public string $image_mode;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsImageMaterialListImagesData> $images 图片ID数组
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsImageMaterialListImagesData::class)]
    public array $images;
    
}