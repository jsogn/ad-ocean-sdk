<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 创意标题素材
class AdvertiserCreativeDetailGetResponseCreativeTitleMaterialsData extends Data
{

    /**
     * @var string $title 创意标题
     */
    public string $title;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeTitleMaterialsWordListData> $word_list 动态词包ID列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeTitleMaterialsWordListData::class)]
    public array $word_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeTitleMaterialsDpaWordListData> $dpa_word_list DPA词包ID列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeTitleMaterialsDpaWordListData::class)]
    public array $dpa_word_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeTitleMaterialsBidwordListData> $bidword_list 搜索关键词列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeTitleMaterialsBidwordListData::class)]
    public array $bidword_list;
    
}