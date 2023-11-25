<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsCountryInfoGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsCountryInfoGetResponseDistrictsData> $districts 行政区域信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsCountryInfoGetResponseDistrictsData::class)]
    public array $districts;
    
}