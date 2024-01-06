<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 搜索直投关键词列表
class PromotionListGetResponseListPromotionMaterialsKeywordsData extends Data
{

    /**
     * @var string $word 关键词
     */
    public string $word;
    
    /**
     * @var string $match_type 匹配类型，允许值: PHRASE（短语匹配）EXTENSIVE（广泛匹配）PRECISION（精准匹配）
     */
    public string $match_type;
    
    /**
     * @var float $bid 出价
     */
    public float $bid;
    
}