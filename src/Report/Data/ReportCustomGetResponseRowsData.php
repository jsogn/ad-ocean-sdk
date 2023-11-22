<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class ReportCustomGetResponseRowsData extends Data
{

    /**
     * @var string $metrics 指标数据
     */
    public string $metrics;
    
    /**
     * @var string $dimensions 维度数据
     */
    public string $dimensions;
    
}