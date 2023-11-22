<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class PromotionRejectReasonGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $promotion_ids 广告ID集合，list长度限制1～10 注：不允许同时传入手动和自动的promotion_id，否则报错
     */
    public array $promotion_ids;
    
    /**
     * @var string $delivery_mode 投放模式，允许值：MANUAL手动投放（默认值）PROCEDURAL自动投放
     */
    public string $delivery_mode;
    
}