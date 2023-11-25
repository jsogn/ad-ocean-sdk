<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsCountryInfoGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var string $language 语言类型ZH_CN表示常用名，如“北京”ZH_CN_GOV表示官方全称，如“北京市”
     */
    public string $language;
    
}