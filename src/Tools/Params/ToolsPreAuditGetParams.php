<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsPreAuditGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsPreAuditGetParamFilterData $filter 过滤条件
     */
    public \AdOceanSdk\Tools\Data\ToolsPreAuditGetParamFilterData $filter;
    
    /**
     * @var int $page 页码，默认值1，范围：page >= 1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认值20，范围：1-50
     */
    public int $page_size;
    
}