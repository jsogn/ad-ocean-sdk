<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class ToolsMicroAppListGetParamFilteringData extends Data
{

    /**
     * @var string $search_key 小程序名称或备注的模糊匹配
     */
    public string $search_key;
    
    /**
     * @var string $audit_status 审核状态，可选值:
     */
    public string $audit_status;
    
    /**
     * @var string $search_type 搜索类型，可选值:
     */
    public string $search_type;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsMicroAppListGetParamFilteringCreateTimeData $create_time 按创建时间查询的时间范围
     */
    public \AdOceanSdk\Tools\Data\ToolsMicroAppListGetParamFilteringCreateTimeData $create_time;
    
}