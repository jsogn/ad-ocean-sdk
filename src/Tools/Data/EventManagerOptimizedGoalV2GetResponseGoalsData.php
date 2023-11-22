<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 优化目标数据列表
class EventManagerOptimizedGoalV2GetResponseGoalsData extends Data
{

    /**
     * @var string $value_type 是否设置差异价值
     */
    public string $value_type;
    
    /**
     * @var string $external_action 预定义转化目标，具体枚举可查看【附录-预定义转化类型】
     */
    public string $external_action;
    
    /**
     * @var string $optimization_name 事件名称
     */
    public string $optimization_name;
    
    /**
     * @var boolean $history_back 历史有无回传,TRUE表示有，FALSE表示无
     */
    public bool $history_back;
    
    /**
     * @var bool $twenty_four_hour_back 24 小时历史有无回传,TRUE表示有，FALSE表示无
     */
    public bool $twenty_four_hour_back;
    
    /**
     * @var array<string> $asset_types 资产类型，枚举值：APP应用、ORANGE橙子落地页、THIRDPARTY自研落地页
     */
    public array $asset_types;
    
    /**
     * @var array $deep_goals 深度优化目标列表
     */
    public array $deep_goals;
    
    /**
     * @var \AdOceanSdk\Tools\Data\EventManagerOptimizedGoalV2GetResponseGoalsDeepExternalActionData $deep_external_action 深度转化目标，具体枚举可查看【附录-预定义转化类型】
     */
    public \AdOceanSdk\Tools\Data\EventManagerOptimizedGoalV2GetResponseGoalsDeepExternalActionData $deep_external_action;
    
}