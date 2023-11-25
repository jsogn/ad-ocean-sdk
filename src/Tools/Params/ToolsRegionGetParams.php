<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsRegionGetParams extends RequestParams
{

    /**
     * @var string $region_type 地域类型，目前只支持：BUSINESS_DISTRICT(商圈)允许值:"BUSINESS_DISTRICT"
     */
    public string $region_type;
    
    /**
     * @var string $region_level 只获取某层级数据，详见【附录-地域层级】
     */
    public string $region_level;
    
}