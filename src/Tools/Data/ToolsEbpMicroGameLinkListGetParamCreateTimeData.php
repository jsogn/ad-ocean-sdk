<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 按创建时间范围筛选查询
class ToolsEbpMicroGameLinkListGetParamCreateTimeData extends Data
{

    /**
     * @var string $start_time 创建起始时间，格式：%Y-%m-%d， >= 格林威治时间（GMT）的秒
     */
    public string $start_time;

    /**
     * @var string $end_time 创建结束时间 ，格式：%Y-%m-%d，<= 格林威治时间（GMT）的秒
     */
    public string $end_time;

}