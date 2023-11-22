<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 地图位置，district为BUSINESS_DISTRICT才有效
class AudiencePackageGetResponseAudiencePackagesAudienceGeolocationData extends Data
{

    /**
     * @var string $province 省份名
     */
    public string $province;
    
    /**
     * @var string $city 城市名
     */
    public string $city;
    
    /**
     * @var string $name 地点名字
     */
    public string $name;
    
    /**
     * @var float $long 经度lat
     */
    public float $long;
    
    /**
     * @var float $lat 纬度
     */
    public float $lat;
    
    /**
     * @var string $street 街道名
     */
    public string $street;
    
    /**
     * @var string $district 区域名
     */
    public string $district;
    
}