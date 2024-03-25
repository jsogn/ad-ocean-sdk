<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DPADetailGetGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $product_platform_id 商品库ID ，可通过【获取商品库信息】获取
     */
    public int $product_platform_id;
    
    /**
     * @var \AdOceanSdk\DPA\Data\DPADetailGetGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\DPA\Data\DPADetailGetGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页码， 默认值:1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面数据量， 默认值:20，最大100
     */
    public int $page_size;
    
}