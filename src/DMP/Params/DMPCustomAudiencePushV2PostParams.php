<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Params;

use AdOceanSdk\RequestParams;

class DMPCustomAudiencePushV2PostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 人群包所属广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $custom_audience_id 人群包ID
     */
    public int $custom_audience_id;
    
    /**
     * @var array<int> $target_advertiser_ids 推送广告主ID列表，最多推送100个广告主
     */
    public array $target_advertiser_ids;
    
}