<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserTransferableFundGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID或代理商ID或组织ID
     */
    public int $advertiser_id;
    
}