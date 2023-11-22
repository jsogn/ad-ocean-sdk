<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsQuotaGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var string $campaign_type 广告组类型，FEED：信息流SEARCH:搜索广告
     */
    public string $campaign_type;
    
    /**
     * @var string $delivery_range 可选值:
     */
    public string $delivery_range;
    
}