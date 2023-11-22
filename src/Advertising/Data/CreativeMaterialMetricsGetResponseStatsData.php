<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 统计数据
class CreativeMaterialMetricsGetResponseStatsData extends Data
{

    /**
     * @var int $material_id 源素材 ID
     */
    public int $material_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeMaterialMetricsGetResponseStatsDerivedMaterialData> $derived_material 派生素材信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeMaterialMetricsGetResponseStatsDerivedMaterialData::class)]
    public array $derived_material;
    
}