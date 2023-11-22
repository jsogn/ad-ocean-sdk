<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 地图位置，district为BUSINESS_DISTRICT才有效
class AudiencePackageUpdatePostParamGeolocationData extends Data
{

    /**
     * @var string $name 地点名字
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
    
    /**
     * @var int $radius 半径范围
     */
    public int $radius;
    
}