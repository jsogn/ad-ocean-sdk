<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class PromotionDeepBidUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionDeepBidUpdatePostParamData> $data 批量修改，包含计划id和出价（批量修改数量不能超过10个)
     */
    public array $data;
    
}