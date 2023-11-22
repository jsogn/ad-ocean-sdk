<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 程序化素材信息
class CreativeDetailGetResponseCreativeData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeImageMaterialsData> $image_materials 图片素材
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeImageMaterialsData::class)]
    public array $image_materials;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeTitleMaterialsData> $title_materials 创意标题素材
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeTitleMaterialsData::class)]
    public array $title_materials;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeVideoMaterialsData> $video_materials 视频素材信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeVideoMaterialsData::class)]
    public array $video_materials;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeComponentMaterialsData> $component_materials 组件信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeComponentMaterialsData::class)]
    public array $component_materials;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeSubTitleMaterialData $sub_title_material 副标题素材
     */
    public \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeSubTitleMaterialData $sub_title_material;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeAbstractMaterialsData> $abstract_materials 摘要素材
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeAbstractMaterialsData::class)]
    public array $abstract_materials;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeDecorationMaterialData $decoration_material 家装卡券素材
     */
    public \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeDecorationMaterialData $decoration_material;
    
}