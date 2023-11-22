<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class ToolsWechatAppletListGetParamFilteringData extends Data
{

    /**
     * @var string $name 小程序名称或备注的模糊匹配
     */
    public string $name;
    
    /**
     * @var string $audit_status 审核状态 允许值: AUDIT_ACCEPTED 审核通过、AUDITING 审核中、AUDIT_REJECTED 审核不通过。不传表示全部状态
     */
    public string $audit_status;
    
    /**
     * @var string $search_type 搜索类型
     */
    public string $search_type;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsWechatAppletListGetParamFilteringCreateTimeData $create_time 按创建时间查询的时间范围
     */
    public \AdOceanSdk\Tools\Data\ToolsWechatAppletListGetParamFilteringCreateTimeData $create_time;
    
}