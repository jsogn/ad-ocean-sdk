<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class NativeAnchorGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $page 页码，默认值:1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面数据量，默认值:10，page_size范围为[1,100]
     */
    public int $page_size;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorGetParamFilteringData $filtering 过滤器
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorGetParamFilteringData $filtering;
    
}