<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 行政区域信息
class ToolsCountryInfoGetResponseDistrictsData extends Data
{

    /**
     * @var string $code 行政区域code
     */
    public string $code;
    
    /**
     * @var string $name 行政区域名称
     */
    public string $name;
    
    /**
     * @var string $description 行政区域类型COUNTRY表示国家STATE表示国家REGION表示区域
     */
    public string $description;
    
}