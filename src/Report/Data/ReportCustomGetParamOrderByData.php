<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 排序
class ReportCustomGetParamOrderByData extends Data
{

    /**
     * @var string $field 排序字段。字段必须在选中的metrics或dimensions中。其中metrics所有字段支持排序。dimensions是否排序请参考维度、指标说明。
     */
    public string $field;
    
    /**
     * @var string $type 排序类型 可选值:
     */
    public string $type;
    
}