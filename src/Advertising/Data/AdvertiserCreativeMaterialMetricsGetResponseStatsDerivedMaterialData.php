<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 派生素材信息
class AdvertiserCreativeMaterialMetricsGetResponseStatsDerivedMaterialData extends Data
{

    /**
     * @var int $mid 派生素材 ID
     */
    public int $mid;
    
    /**
     * @var int $total_derived_cost 派生素材总计消耗（单位：元）
     */
    public int $total_derived_cost;
    
}