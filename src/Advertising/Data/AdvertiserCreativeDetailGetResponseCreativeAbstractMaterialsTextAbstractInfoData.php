<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 文本摘要信息
class AdvertiserCreativeDetailGetResponseCreativeAbstractMaterialsTextAbstractInfoData extends Data
{

    /**
     * @var string $abstract_text 文本摘要内容
     */
    public string $abstract_text;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeAbstractMaterialsTextAbstractInfoBidwordListData> $bidword_list 搜索关键词列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeAbstractMaterialsTextAbstractInfoBidwordListData::class)]
    public array $bidword_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeAbstractMaterialsTextAbstractInfoWordListData> $word_list 动态词包ID列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeAbstractMaterialsTextAbstractInfoWordListData::class)]
    public array $word_list;
    
}