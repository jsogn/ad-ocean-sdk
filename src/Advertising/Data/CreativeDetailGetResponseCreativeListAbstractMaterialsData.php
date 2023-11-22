<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 摘要素材
class CreativeDetailGetResponseCreativeListAbstractMaterialsData extends Data
{

    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListAbstractMaterialsTextAbstractInfoData $text_abstract_info 文本摘要信息
     */
    public \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListAbstractMaterialsTextAbstractInfoData $text_abstract_info;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListAbstractMaterialsStructAbstractInfoData $struct_abstract_info 标签摘要信息
     */
    public \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListAbstractMaterialsStructAbstractInfoData $struct_abstract_info;
    
}