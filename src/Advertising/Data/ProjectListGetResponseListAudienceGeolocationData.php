<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 从地图添加(地图位置)
class ProjectListGetResponseListAudienceGeolocationData extends Data
{

    /**
     * @var int $radius 半径，单位为m
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