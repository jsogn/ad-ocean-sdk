<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 当前的起量信息， 当status=RAISING时返回该字段
class ToolsPromotionRaiseStatusCurrentIdsGetResponseDataRaiseInfoData extends Data
{

    /**
     * @var string $raise_end_time 起量预算
     */
    public string $raise_end_time;
    
    /**
     * @var float $raise_budget 预计结束时间，格式为yyyy-mm-dd HH:MM
     */
    public float $raise_budget;
    
}