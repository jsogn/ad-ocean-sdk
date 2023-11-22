<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 起量信息
class ToolsPromotionRaiseStatusGetResponseListRaiseInfoData extends Data
{

    /**
     * @var int $raise_budget 起量预算
     */
    public int $raise_budget;
    
    /**
     * @var bool $is_effective_now 是否立即生效
     */
    public bool $is_effective_now;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsPromotionRaiseStatusGetResponseListRaiseInfoAppointTimeData $appoint_time 指定投放时间
     */
    public \AdOceanSdk\Tools\Data\ToolsPromotionRaiseStatusGetResponseListRaiseInfoAppointTimeData $appoint_time;
    
}