<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 程序化素材信息
class AdvertiserCreativeDetailGetResponseCreativeData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeImageMaterialsData> $image_materials 图片素材
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeImageMaterialsData::class)]
    public array $image_materials;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeTitleMaterialsData> $title_materials 创意标题素材
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeTitleMaterialsData::class)]
    public array $title_materials;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeVideoMaterialsData> $video_materials 视频素材信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeVideoMaterialsData::class)]
    public array $video_materials;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeComponentMaterialsData> $component_materials 组件信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeComponentMaterialsData::class)]
    public array $component_materials;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeSubTitleMaterialData $sub_title_material 副标题素材
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeSubTitleMaterialData $sub_title_material;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeAbstractMaterialsData> $abstract_materials 摘要素材
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeAbstractMaterialsData::class)]
    public array $abstract_materials;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeDecorationMaterialData $decoration_material 家装卡券素材
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeDecorationMaterialData $decoration_material;
    
}