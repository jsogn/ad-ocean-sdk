<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 指定投放时间
class ToolsPromotionRaiseStatusGetResponseListRaiseInfoAppointTimeData extends Data
{

    /**
     * @var array<string> $repeat_day 重复周期
     */
    public array $repeat_day;
    
    /**
     * @var string $raise_time 起量时间
     */
    public string $raise_time;
    
}