<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsLandingGroupGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id，范围：1 <= advertiser_id <=MAX_INT64
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsLandingGroupGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\Tools\Data\ToolsLandingGroupGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页码默认值:1，范围：page >= 1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小默认值:10，范围：page_size >= 1
     */
    public int $page_size;
    
}