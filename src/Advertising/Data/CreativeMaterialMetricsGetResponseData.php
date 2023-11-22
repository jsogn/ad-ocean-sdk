<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CreativeMaterialMetricsGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeMaterialMetricsGetResponseStatsData> $stats 统计数据
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeMaterialMetricsGetResponseStatsData::class)]
    public array $stats;
    
    /**
     * @var int $adv_id 广告主 ID
     */
    public int $adv_id;
    
}