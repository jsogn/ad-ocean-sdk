<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class PromotionDeletePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $promotion_ids 广告ID集合，list长度限制1～10
     */
    public array $promotion_ids;
    
}