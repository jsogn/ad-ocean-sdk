<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片素材
class CreativeDetailGetResponseCreativeImageMaterialsData extends Data
{

    /**
     * @var string $image_mode 素材类型
     */
    public string $image_mode;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeImageMaterialsTemplateImageData $template_image 图片模版信息，SDPA/DPA场景下有效
     */
    public \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeImageMaterialsTemplateImageData $template_image;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeImageMaterialsImageInfoData> $image_info 图片素材信息
     */
    public array $image_info;
    
}