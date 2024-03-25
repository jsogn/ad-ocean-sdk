<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DPAMetaGetGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $platform_id 商品库id
     */
    public int $platform_id;
    
}