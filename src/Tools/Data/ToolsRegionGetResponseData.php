<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsRegionGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsRegionGetResponseListData> $list 行业列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsRegionGetResponseListData::class)]
    public array $list;
    
}