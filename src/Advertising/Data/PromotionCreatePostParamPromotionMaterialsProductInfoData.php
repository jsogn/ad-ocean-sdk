<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 产品信息
class PromotionCreatePostParamPromotionMaterialsProductInfoData extends Data
{

    /**
     * @var array<string> $titles 产品名称，字数限制：[1-20]，数组上限为1
     */
    public array $titles;
    
    /**
     * @var array<string> $image_ids 产品主图，尺寸要求108*108，上限10个可通过【获取图片素材】接口获得
     */
    public array $image_ids;
    
    /**
     * @var array<string> $selling_points 产品卖点，字数限制：[6-9]，数组上限为10
     */
    public array $selling_points;
    
}