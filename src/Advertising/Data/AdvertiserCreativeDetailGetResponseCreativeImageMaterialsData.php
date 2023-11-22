<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片素材
class AdvertiserCreativeDetailGetResponseCreativeImageMaterialsData extends Data
{

    /**
     * @var string $image_mode 素材类型
     */
    public string $image_mode;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeImageMaterialsTemplateImageData $template_image 图片模版信息，SDPA/DPA场景下有效
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeImageMaterialsTemplateImageData $template_image;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeImageMaterialsImageInfoData> $image_info 图片素材信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeImageMaterialsImageInfoData::class)]
    public array $image_info;
    
}