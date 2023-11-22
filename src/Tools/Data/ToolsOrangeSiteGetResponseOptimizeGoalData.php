<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 优化目标
class ToolsOrangeSiteGetResponseOptimizeGoalData extends Data
{

    /**
     * @var string $external_action 优化目标
     */
    public string $external_action;
    
    /**
     * @var string $deep_external_action 深度转化目标
     */
    public string $deep_external_action;
    
}