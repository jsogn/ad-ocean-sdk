<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ReportCustomConfigGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Report\Data\ReportCustomConfigGetResponseListData> $list 数据主题配置列表
     */
    public array $list;
    
}