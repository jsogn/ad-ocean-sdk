<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 指定投放时间，当is_effective_now为FALSE时填写有效
class ToolsPromotionRaiseSetPostParamRaiseInfoAppointedTimeData extends Data
{

    /**
     * @var array<string> $repeated_day 重复周期，仅生效一次。不传则不重复，传入EVERY_DAY则每天重复
     */
    public array $repeated_day;
    
    /**
     * @var string $raise_time 起量时间
     */
    public string $raise_time;
    
}