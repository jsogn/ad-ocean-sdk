<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 维度列表
class ReportCustomConfigGetResponseListDimensionsData extends Data
{

    /**
     * @var string $field 维度字段
     */
    public string $field;
    
    /**
     * @var string $name 维度名称
     */
    public string $name;
    
    /**
     * @var string $description 维度描述
     */
    public string $description;
    
    /**
     * @var bool $sort_able 是否支持排序
     */
    public bool $sort_able;
    
    /**
     * @var bool $filter_able 是否支持筛选
     */
    public bool $filter_able;
    
    /**
     * @var \AdOceanSdk\Report\Data\ReportCustomConfigGetResponseListDimensionsFilterConfigData $filter_config 筛选条件
     */
    public \AdOceanSdk\Report\Data\ReportCustomConfigGetResponseListDimensionsFilterConfigData $filter_config;
    
    /**
     * @var array<string> $exclusion_dims 与维度互斥的维度列表
     */
    public array $exclusion_dims;
    
    /**
     * @var array<string> $exclusion_metrics 与维度互斥的指标列表
     */
    public array $exclusion_metrics;
    
}