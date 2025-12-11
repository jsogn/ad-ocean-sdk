<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 数据主题配置列表
class ReportCustomConfigGetResponseListData extends Data
{

    /**
     * @var string $data_topic 数据主体，枚举值：
     */
    public string $data_topic;
    
    /**
     * @var array<\AdOceanSdk\Report\Data\ReportCustomConfigGetResponseListDimensionsData> $dimensions 维度列表
     */
    public array $dimensions;
    
    /**
     * @var array<\AdOceanSdk\Report\Data\ReportCustomConfigGetResponseListMetricsData> $metrics 指标列表
     */
    public array $metrics;
    
}