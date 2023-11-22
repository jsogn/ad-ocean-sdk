<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 自定义素材信息
class CreativeDetailGetResponseCreativeListData extends Data
{

    /**
     * @var int $creative_id 创意ID。当类型为程序化创意时，没有审核通过前，该字段为null
     */
    public int $creative_id;
    
    /**
     * @var string $image_mode 素材类型
     */
    public string $image_mode;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListImageMaterialsData> $image_materials 创意图片素材
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListImageMaterialsData::class)]
    public array $image_materials;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListTitleMaterialData $title_material 创意标题素材
     */
    public \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListTitleMaterialData $title_material;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListVideoMaterialData $video_material 视频素材信息
     */
    public \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListVideoMaterialData $video_material;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListPlayableMaterialData $playable_material 基础试玩素材
     */
    public \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListPlayableMaterialData $playable_material;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListInteractiveMaterialData $interactive_material 直出互动素材信息
     */
    public \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListInteractiveMaterialData $interactive_material;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListAbstractMaterialsData> $abstract_materials 摘要素材
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListAbstractMaterialsData::class)]
    public array $abstract_materials;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListDecorationMaterialData $decoration_material 家装卡券素材
     */
    public \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListDecorationMaterialData $decoration_material;
    
}