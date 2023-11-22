<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class EventManagerOptimizedGoalV2GetResponseData extends Data
{

    /**
     * @var array<int> $asset_ids 事件管理的资产id
     */
    public array $asset_ids;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\EventManagerOptimizedGoalV2GetResponseGoalsData> $goals 优化目标数据列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\EventManagerOptimizedGoalV2GetResponseGoalsData::class)]
    public array $goals;
    
}