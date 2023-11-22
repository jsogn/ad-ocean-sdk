<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 创意图片素材，上限10个，video_material_list 与 image_material_list 最少传入一种
class PromotionCreatePostParamPromotionMaterialsImageMaterialListData extends Data
{

    /**
     * @var string $image_mode 素材类型，允许值：
     */
    public string $image_mode;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsImageMaterialListImagesData> $images 图片ID数组，目前仅支持传入1个
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsImageMaterialListImagesData::class)]
    public array $images;
    
}