<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 批量修改，包含计划id和出价（批量修改数量不能超过10个)
class PromotionDeepBidUpdatePostParamData extends Data
{

    /**
     * @var int $promotion_id 广告ID，广告ID需要属于广告主，否则会报错
     */
    public int $promotion_id;
    
    /**
     * @var float $deepbid 深度出价，单位“元”，精度：两位小数。取值范围：0.1-10000元.
     */
    public float $deepbid;
    
}