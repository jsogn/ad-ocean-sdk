<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 筛选条件
class ReportCustomConfigGetResponseListDimensionsFilterConfigData extends Data
{

    /**
     * @var int $type 筛选字段类型
     */
    public int $type;
    
    /**
     * @var int $operator 筛选方式，枚举值：
     */
    public int $operator;
    
    /**
     * @var int $value_limit 筛选字段传入数量上限
     */
    public int $value_limit;
    
    /**
     * @var array<\AdOceanSdk\Report\Data\ReportCustomConfigGetResponseListDimensionsFilterConfigRangeValueData> $range_value 筛选字段枚举列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Report\Data\ReportCustomConfigGetResponseListDimensionsFilterConfigRangeValueData::class)]
    public array $range_value;
    
}