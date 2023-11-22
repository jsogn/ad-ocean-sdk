<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 指标列表
class ReportCustomConfigGetResponseListMetricsData extends Data
{

    /**
     * @var string $field 字段
     */
    public string $field;
    
    /**
     * @var string $name 字段名称
     */
    public string $name;
    
    /**
     * @var string $description 字段描述
     */
    public string $description;
    
    /**
     * @var array<string> $exclusion_dims 与指标互斥的维度
     */
    public array $exclusion_dims;
    
}