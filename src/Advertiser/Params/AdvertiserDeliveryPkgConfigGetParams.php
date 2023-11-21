<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserDeliveryPkgConfigGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 
     */
    public int $advertiser_id;
    
    /**
     * @var int $first_industry_id 一级行业id
     */
    public int $first_industry_id;
    
    /**
     * @var int $second_industry_id 二级行业id
     */
    public int $second_industry_id;
    
    /**
     * @var int $third_industry_id 三级行业id
     */
    public int $third_industry_id;
    
}