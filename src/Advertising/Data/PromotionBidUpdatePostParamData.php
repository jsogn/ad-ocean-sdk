<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 批量修改出价，list长度限制1～10
class PromotionBidUpdatePostParamData extends Data
{

    /**
     * @var int $promotion_id 广告ID
     */
    public int $promotion_id;
    
    /**
     * @var float $bid 出价，单位“元”，精度：两位小数。
     */
    public float $bid;
    
}