<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ReportCustomGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Report\Data\ReportCustomGetResponseRowsData> $rows 
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Report\Data\ReportCustomGetResponseRowsData::class)]
    public array $rows;
    
    /**
     * @var dict[string] $total_metrics 指标汇总数据
     */
    public dict[string] $total_metrics;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}