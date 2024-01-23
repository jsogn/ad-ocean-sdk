<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 优化目标
class ProjectListGetResponseListOptimizeGoalData extends Data
{

    /**
     * @var array<int> $asset_ids 事件管理资产id
     */
    public ?array $asset_ids;
    
    /**
     * @var int $convert_id 转化跟踪id
     */
    public int $convert_id;
    
    /**
     * @var string $external_action 优化目标
     */
    public string $external_action;
    
    /**
     * @var int $paid_switch 字节提供的归因方式，返回值：
     */
    public int $paid_switch;
    
    /**
     * @var string $deep_external_action 深度转化目标
     */
    public string $deep_external_action;
    
    /**
     * @var string $value_optimized_type 目标优化类型
     */
    public string $value_optimized_type;
    
}