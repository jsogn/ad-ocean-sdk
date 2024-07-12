<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class ToolsEventAllAssetsListGetParamFilteringData extends Data
{

    /**
     * @var array<int> $asset_ids 资产id列表，list长度最大`100`
     */
    public array $asset_ids;
    
    /**
     * @var string $asset_type 资产类型，允许值：
     */
    public string $asset_type;
    
    /**
     * @var string $modify_start_time 按照资产修改时间筛选，开始时间`YYYY-MM-DD`，必须与结束时间搭配传入
开始时间必须≤结束时间
     */
    public string $modify_start_time;
    
    /**
     * @var string $modify_end_time 按照资产修改时间筛选，结束时间`YYYY-MM-DD`，必须与开始时间搭配传入
开始时间必须≤结束时间
     */
    public string $modify_end_time;
    
}