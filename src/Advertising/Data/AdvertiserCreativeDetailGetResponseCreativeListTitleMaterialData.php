<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 创意标题素材
class AdvertiserCreativeDetailGetResponseCreativeListTitleMaterialData extends Data
{

    /**
     * @var string $title 创意标题
     */
    public string $title;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListTitleMaterialWordListData> $word_list 动态词包ID列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListTitleMaterialWordListData::class)]
    public array $word_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListTitleMaterialDpaWordListData> $dpa_word_list DPA词包ID列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListTitleMaterialDpaWordListData::class)]
    public array $dpa_word_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListTitleMaterialBidwordListData> $bidword_list 搜索关键词
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListTitleMaterialBidwordListData::class)]
    public array $bidword_list;
    
}