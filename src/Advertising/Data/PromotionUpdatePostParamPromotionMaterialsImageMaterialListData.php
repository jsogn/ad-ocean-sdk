<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 创意图片素材，上限10个，video_material_list 与 image_material_list 最少传入一种，直播链路不支持图片素材
class PromotionUpdatePostParamPromotionMaterialsImageMaterialListData extends Data
{

    /**
     * @var string $image_mode 素材类型，允许值：CREATIVE_IMAGE_MODE_SMALL小图、CREATIVE_IMAGE_MODE_LARGE大图、CREATIVE_IMAGE_MODE_LARGE_VERTICAL大图竖图、CREATIVE_IMAGE_MODE_UNION_SPLASH穿山甲开屏图片
     */
    public string $image_mode;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionUpdatePostParamPromotionMaterialsImageMaterialListData> $ 图片ID数组，目前仅支持传入1个
     */
    public array $images;
    
}