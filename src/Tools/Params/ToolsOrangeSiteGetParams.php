<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsOrangeSiteGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var int $page 页码，默认值:1，范围：page >= 1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面数据量，默认值：10，范围：1-50
     */
    public int $page_size;
    
    /**
     * @var string $status 建站粗粒度状态，详见【附录-枚举值-建站粗粒度状态】
     */
    public string $status;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsOrangeSiteGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\Tools\Data\ToolsOrangeSiteGetParamFilteringData $filtering;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsOrangeSiteGetParamOptimizeGoalData $optimize_goal 优化目标
     */
    public \AdOceanSdk\Tools\Data\ToolsOrangeSiteGetParamOptimizeGoalData $optimize_goal;
    
}