<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 标题素材
class PromotionListGetResponseListPromotionMaterialsTitleMaterialListData extends Data
{

    /**
     * @var int $material_id 素材ID
     */
    public int $material_id;
    
    /**
     * @var array<int> $dpa_word_list DPA词包ID列表
     */
    public array $dpa_word_list;
    
    /**
     * @var string $title 创意标题
     */
    public string $title;
    
    /**
     * @var array<int> $word_list 动态词包ID
     */
    public array $word_list;
    
}