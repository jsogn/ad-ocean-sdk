<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Params;

use AdOceanSdk\RequestParams;

class DMPCustomAudiencePublishPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 人群包所属广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $custom_audience_id 人群包ID
     */
    public int $custom_audience_id;
    
}