<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片ID数组
class PromotionListGetResponseListPromotionMaterialsImageMaterialListImagesData extends Data
{

    /**
     * @var int $template_id 图片素材类型-DPA模板ID
     */
    public int $template_id;
    
    /**
     * @var string $image_id 图片ID
     */
    public string $image_id;
    
    /**
     * @var int $material_id 素材ID
     */
    public int $material_id;
    
    /**
     * @var string $material_opt_status 图片素材操作状态，枚举值：
     */
    public string $material_opt_status;
    
    /**
     * @var string $material_status 素材审核状态，枚举值：MATERIAL_STATUS_ADV_OFFLINE_BUDGET: 广告主超出预算
     */
    public string $material_status;
    
}