<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ReportIntergratedGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Report\Data\ReportIntergratedGetResponseListData> $list 以下为list中每个元素的字段
     */
    public array $list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}