<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 从地图添加(地图位置)，district为"BUSINESS_DISTRICT"时填写
class ToolsEstimateAudienceGetParamGeolocationData extends Data
{

    /**
     * @var int $radius 半径，单位为m，允许值为：3000-15000
     */
    public int $radius;
    
    /**
     * @var string $name 地点名称
     */
    public string $name;
    
    /**
     * @var float $long 经度
     */
    public float $long;
    
    /**
     * @var float $lat 纬度
     */
    public float $lat;
    
}