<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 创意图片素材
class AdvertiserCreativeDetailGetResponseCreativeListImageMaterialsData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListImageMaterialsImageInfoData> $image_info 图片素材信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListImageMaterialsImageInfoData::class)]
    public array $image_info;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListImageMaterialsTemplateImageData $template_image 图片模版信息，SDPA/DPA场景下有效
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListImageMaterialsTemplateImageData $template_image;
    
}