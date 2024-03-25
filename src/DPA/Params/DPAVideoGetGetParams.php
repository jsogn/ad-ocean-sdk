<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DPAVideoGetGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\DPA\Data\DPAVideoGetGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\DPA\Data\DPAVideoGetGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页码， 默认值:1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面数据量 默认值:20，最大100
     */
    public int $page_size;
    
}