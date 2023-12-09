<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsAdminInfoGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsAdminInfoGetResponseDistrictsData> $districts 行政层级信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsAdminInfoGetResponseDistrictsData::class)]
    public array $districts;

    /**
     * @var string $version 行政信息版本号
     */
    public string $version;

}