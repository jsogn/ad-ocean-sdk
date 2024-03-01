<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ReportAdvertiserGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Report\Data\ReportAdvertiserGetResponseListData> $list 数据列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Report\Data\ReportAdvertiserGetResponseListData::class)]
    public array $list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}