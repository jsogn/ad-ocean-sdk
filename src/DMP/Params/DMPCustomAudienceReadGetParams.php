<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Params;

use AdOceanSdk\RequestParams;

class DMPCustomAudienceReadGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $custom_audience_ids 人群包ID列表，长度取值范围：1-100
     */
    public array $custom_audience_ids;
    
}