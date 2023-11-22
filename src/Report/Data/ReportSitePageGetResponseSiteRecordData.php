<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 数据列表
class ReportSitePageGetResponseSiteRecordData extends Data
{

    /**
     * @var array<\AdOceanSdk\Report\Data\ReportSitePageGetResponseSiteRecordKeyData> $key 指标名称。【建站报表落地页指标名称】。
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Report\Data\ReportSitePageGetResponseSiteRecordKeyData::class)]
    public array $key;
    
}