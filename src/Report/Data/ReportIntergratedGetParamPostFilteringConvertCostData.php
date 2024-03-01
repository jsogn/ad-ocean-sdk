<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 按转化成本过滤，左闭右开区间，正负均可，min必须小于max
class ReportIntergratedGetParamPostFilteringConvertCostData extends Data
{

    /**
     * @var float $min 最小转化成本
     */
    public float $min;
    
    /**
     * @var float $max 最大转化成本
     */
    public float $max;
    
}