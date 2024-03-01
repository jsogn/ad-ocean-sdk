<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 按转化数过滤，左闭右开区间，正负均可，min必须小于max
class ReportIntergratedGetParamPostFilteringConvertData extends Data
{

    /**
     * @var float $min 最小转化数
     */
    public float $min;
    
    /**
     * @var float $max 最大转化数
     */
    public float $max;
    
}