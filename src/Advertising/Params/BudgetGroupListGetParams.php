<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class BudgetGroupListGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\BudgetGroupListGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\Advertising\Data\BudgetGroupListGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页数，默认值：1，page范围为[1,99999]
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小默认值：10，page_size范围为[1,100]
     */
    public int $page_size;
    
}