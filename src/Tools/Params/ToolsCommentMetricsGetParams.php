<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsCommentMetricsGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var string $start_time 查询起始时间，格式：yyyy-MM-dd，时间跨度最大90天
     */
    public string $start_time;
    
    /**
     * @var string $end_time 查询截止时间，格式：yyyy-MM-dd，时间跨度最大90天
     */
    public string $end_time;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsCommentMetricsGetParamFilteringData $filtering 筛选条件
     */
    public \AdOceanSdk\Tools\Data\ToolsCommentMetricsGetParamFilteringData $filtering;
    
}