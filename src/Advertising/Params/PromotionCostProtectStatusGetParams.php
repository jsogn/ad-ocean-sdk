<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class PromotionCostProtectStatusGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $promotion_ids 广告ID集合，每次最多传入50个
     */
    public array $promotion_ids;
    
}