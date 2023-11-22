<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回值
class ReportSitePageGetResponseData extends Data
{

    /**
     * @var string $site_id 站点ID
     */
    public string $site_id;
    
    /**
     * @var \AdOceanSdk\Report\Data\ReportSitePageGetResponseSiteRecordData $site_record 数据列表
     */
    public \AdOceanSdk\Report\Data\ReportSitePageGetResponseSiteRecordData $site_record;
    
}