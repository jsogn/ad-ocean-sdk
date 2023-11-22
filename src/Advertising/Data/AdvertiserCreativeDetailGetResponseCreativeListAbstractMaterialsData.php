<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 摘要素材
class AdvertiserCreativeDetailGetResponseCreativeListAbstractMaterialsData extends Data
{

    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListAbstractMaterialsTextAbstractInfoData $text_abstract_info 文本摘要信息
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListAbstractMaterialsTextAbstractInfoData $text_abstract_info;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListAbstractMaterialsStructAbstractInfoData $struct_abstract_info 标签摘要信息
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListAbstractMaterialsStructAbstractInfoData $struct_abstract_info;
    
}