<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 按创建时间范围筛选查询
class ToolsEbpMicroAppletLinkListGetParamCreateTimeData extends Data
{

    /**
     * @var int $start_time 创建起始时间，格式：%Y-%m-%d
     */
    public int $start_time;

    /**
     * @var int $end_time 创建结束时间，格式：%Y-%m-%d
     */
    public int $end_time;

}