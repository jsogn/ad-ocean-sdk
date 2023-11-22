<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 指标名称。【建站报表落地页指标名称】。
class ReportSitePageGetResponseSiteRecordKeyData extends Data
{

    /**
     * @var float $value 指标值
     */
    public float $value;
    
    /**
     * @var string $date_time 时间。格式: "2021-03-14"
     */
    public string $date_time;
    
}