<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class ToolsSiteGetParamFilteringData extends Data
{

    /**
     * @var string $search 搜索字段，按照建站id和建站name进行模糊匹配，范围：1 <= 长度 <= 50
     */
    public string $search;
    
}