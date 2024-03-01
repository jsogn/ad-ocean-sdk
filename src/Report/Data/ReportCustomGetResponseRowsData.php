<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class ReportCustomGetResponseRowsData extends Data
{

    /**
     * @var array $metrics 指标数据
     */
    public array $metrics;
    
    /**
     * @var array $dimensions 维度数据
     */
    public array $dimensions;
    
}