<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 文本摘要信息
class AdvertiserCreativeDetailGetResponseCreativeListAbstractMaterialsTextAbstractInfoData extends Data
{

    /**
     * @var string $abstract_text 文本摘要内容
     */
    public string $abstract_text;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListAbstractMaterialsTextAbstractInfoBidwordListData> $bidword_list 搜索关键词列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListAbstractMaterialsTextAbstractInfoBidwordListData::class)]
    public array $bidword_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListAbstractMaterialsTextAbstractInfoWordListData> $word_list 动态词包ID列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListAbstractMaterialsTextAbstractInfoWordListData::class)]
    public array $word_list;
    
}