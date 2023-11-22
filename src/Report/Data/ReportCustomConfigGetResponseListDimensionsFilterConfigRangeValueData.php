<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 筛选字段枚举列表
class ReportCustomConfigGetResponseListDimensionsFilterConfigRangeValueData extends Data
{

    /**
     * @var string $label 筛选字段名称
     */
    public string $label;
    
    /**
     * @var string $value 筛选字段具体值
     */
    public string $value;
    
}