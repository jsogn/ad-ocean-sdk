<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 创意标题素材
class CreativeDetailGetResponseCreativeListTitleMaterialData extends Data
{

    /**
     * @var string $title 创意标题
     */
    public string $title;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListTitleMaterialWordListData> $word_list 动态词包ID列表
     */
    public array $word_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListTitleMaterialDpaWordListData> $dpa_word_list DPA词包ID列表
     */
    public array $dpa_word_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListTitleMaterialBidwordListData> $bidword_list 搜索关键词
     */
    public array $bidword_list;
    
}