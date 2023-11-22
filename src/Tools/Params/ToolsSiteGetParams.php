<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsSiteGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id，范围：1 <= advertiser_id <=MAX_INT64
     */
    public int $advertiser_id;
    
    /**
     * @var int $page 页码，默认值:1，范围：page >= 1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面数据量，默认值：10，范围：20～300
     */
    public int $page_size;
    
    /**
     * @var string $status 建站粗粒度状态，详见【附录-枚举值-建站粗粒度状态】
     */
    public string $status;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsSiteGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\Tools\Data\ToolsSiteGetParamFilteringData $filtering;
    
}