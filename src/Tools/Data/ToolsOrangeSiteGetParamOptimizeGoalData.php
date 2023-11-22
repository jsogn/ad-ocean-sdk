<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 优化目标
class ToolsOrangeSiteGetParamOptimizeGoalData extends Data
{

    /**
     * @var string $external_action 优化目标 可通过【资产-事件管理-获取可用优化目标(体验版)】获取
     */
    public string $external_action;
    
    /**
     * @var string $deep_external_action 深度转化目标 可通过【资产-事件管理-获取可用优化目标(体验版)】获取
     */
    public string $deep_external_action;
    
}