<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片ID数组，目前仅支持传入1个
class PromotionCreatePostParamPromotionMaterialsImageMaterialListImagesData extends Data
{

    /**
     * @var string $image_id 图片ID，image_mode为图片素材时填写 可通过【获取图片素材】接口获得
     */
    public string $image_id;
    
}