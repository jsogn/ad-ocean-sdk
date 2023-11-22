<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 深度转化目标，具体枚举可查看【附录-预定义转化类型】
class EventManagerOptimizedGoalV2GetResponseGoalsDeepExternalActionData extends Data
{

    /**
     * @var string $optimization_name 事件名称
     */
    public string $optimization_name;
    
    /**
     * @var boolean $history_back 历史有无回传,TRUE表示有，FALSE表示无
     */
    public boolean $history_back;
    
    /**
     * @var boolean $twenty_four_hour_back 24 小时历史有无回传,TRUE表示有，FALSE表示无
     */
    public boolean $twenty_four_hour_back;
    
    /**
     * @var array<string> $asset_types 资产类型，枚举值：APP应用
     */
    public array $asset_types;
    
}