<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 按创建时间查询的时间范围
class ToolsWechatAppletListGetParamFilteringCreateTimeData extends Data
{

    /**
     * @var string $start_time 创建起始时间，格式：%Y-%m-%d
     */
    public string $start_time;
    
    /**
     * @var string $end_time 创建结束时间，格式：%Y-%m-%d
     */
    public string $end_time;
    
}