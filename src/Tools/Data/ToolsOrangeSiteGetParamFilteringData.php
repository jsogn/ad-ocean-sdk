<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class ToolsOrangeSiteGetParamFilteringData extends Data
{

    /**
     * @var string $search 搜索字段，按照建站id和建站name进行模糊匹配，范围：1 <= 长度 <= 50
     */
    public string $search;
    
    /**
     * @var string $search_mode 搜索模式（落地页共享类型），默认值：OUR我创建；枚举值：OUR我创建、OTHER被他人分享、ALL所有
     */
    public string $search_mode;
    
}