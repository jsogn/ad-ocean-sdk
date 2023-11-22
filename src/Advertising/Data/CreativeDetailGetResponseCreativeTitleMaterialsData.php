<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 创意标题素材
class CreativeDetailGetResponseCreativeTitleMaterialsData extends Data
{

    /**
     * @var string $title 创意标题
     */
    public string $title;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeTitleMaterialsWordListData> $word_list 动态词包ID列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeTitleMaterialsWordListData::class)]
    public array $word_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeTitleMaterialsDpaWordListData> $dpa_word_list DPA词包ID列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeTitleMaterialsDpaWordListData::class)]
    public array $dpa_word_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeTitleMaterialsBidwordListData> $bidword_list 搜索关键词列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeTitleMaterialsBidwordListData::class)]
    public array $bidword_list;
    
}