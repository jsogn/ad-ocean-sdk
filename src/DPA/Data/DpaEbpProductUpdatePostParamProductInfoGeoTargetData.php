<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class DpaEbpProductUpdatePostParamProductInfoGeoTargetData extends Data
{

    /**
     * @var float $longitude 
     */
    public float $longitude;

    /**
     * @var float $latitude 
     */
    public float $latitude;

    /**
     * @var int $range 
     */
    public int $range;

}