<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DPAProductDeletePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var int $platform_id 商品库id
     */
    public int $platform_id;
    
    /**
     * @var int $product_id 商品id
     */
    public int $product_id;
    
}