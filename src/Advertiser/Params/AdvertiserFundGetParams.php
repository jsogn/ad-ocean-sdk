<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserFundGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID或代理商ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $grant_type_split 是否拆分赠款类型，允许值：
     */
    public string $grant_type_split;
    
}