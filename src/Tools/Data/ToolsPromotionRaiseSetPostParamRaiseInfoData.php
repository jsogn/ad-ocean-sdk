<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 起量信息，如果需要全部删除请传[]
class ToolsPromotionRaiseSetPostParamRaiseInfoData extends Data
{

    /**
     * @var int $raise_budget 起量预算，单位：元，允许小数点后两位起量预算需大于等于计划出价，小于等于计划预算
     */
    public int $raise_budget;

    /**
     * @var bool $is_effective_now 是否立即生效，仅支持广告状态为“投放中”的广告，仅支持1个方案设置“立即生效”，传入True时不支持填写appointed_time
     */
    public bool $is_effective_now;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsPromotionRaiseSetPostParamRaiseInfoAppointedTimeData $appointed_time 指定投放时间，当is_effective_now为FALSE时填写有效
     */
    public \AdOceanSdk\Tools\Data\ToolsPromotionRaiseSetPostParamRaiseInfoAppointedTimeData $appointed_time;

}