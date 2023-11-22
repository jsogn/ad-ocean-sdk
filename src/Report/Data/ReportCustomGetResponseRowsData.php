<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class ReportCustomGetResponseRowsData extends Data
{

    /**
     * @var dict[string] $metrics 指标数据
     */
    public dict[string] $metrics;
    
    /**
     * @var dict[string] $dimensions 维度数据
     */
    public dict[string] $dimensions;
    
}