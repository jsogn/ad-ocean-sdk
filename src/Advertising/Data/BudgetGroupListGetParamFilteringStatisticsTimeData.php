<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 统计时间范围
class BudgetGroupListGetParamFilteringStatisticsTimeData extends Data
{

    /**
     * @var string $start_time 开始时间，格式：yyyy-mm-dd HH:MM:SS
     */
    public string $start_time;
    
    /**
     * @var string $end_time 结束时间，格式：yyyy-mm-dd HH:MM:SS，默认为当前时间
     */
    public string $end_time;
    
}