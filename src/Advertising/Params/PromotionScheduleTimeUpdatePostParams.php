<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class PromotionScheduleTimeUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionScheduleTimeUpdatePostParamData> $data 批量修改投放时段，限制最多批量修改10条广告
     */
    public array $data;
    
}