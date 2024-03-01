<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 按总消耗过滤，左闭右开区间，正负均可，min必须小于max
class ReportIntergratedGetParamPostFilteringCostData extends Data
{

    /**
     * @var float $min 总消耗最小值
     */
    public float $min;
    
    /**
     * @var float $max 总消耗最大值
     */
    public float $max;
    
}