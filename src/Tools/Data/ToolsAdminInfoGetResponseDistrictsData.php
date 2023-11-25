<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 行政层级信息
class ToolsAdminInfoGetResponseDistrictsData extends Data
{

    /**
     * @var string $name 行政区域名称
     */
    public string $name;
    
    /**
     * @var string $level 行政区域层级
     */
    public string $level;
    
    /**
     * @var string $code 中国大陆行政区域编码
     */
    public string $code;
    
    /**
     * @var int $geoname_id 港澳台、国外行政区域编码
     */
    public int $geoname_id;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsAdminInfoGetResponseDistrictsSubDistrictsData> $sub_districts 子行政层级信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsAdminInfoGetResponseDistrictsSubDistrictsData::class)]
    public array $sub_districts;
    
}