<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsAdminInfoGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var array<string> $codes 行政区域编码列表
     */
    public array $codes;
    
    /**
     * @var string $language 语言类型ZH_CN表示常用名，如“北京”ZH_CN_GOV表示官方全称，如“北京市”
     */
    public string $language;
    
    /**
     * @var string $sub_district 行政区域层级。NONE当前层级ONE_LEVEL下一级区域TWO_LEVEL下二级区域THREE_LEVEL下三级区域FOUR_LEVEL下四级区域
     */
    public string $sub_district;
    
}