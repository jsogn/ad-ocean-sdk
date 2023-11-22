<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class ToolsLandingGroupGetParamFilteringData extends Data
{

    /**
     * @var string $group_id 落地页组 ID
     */
    public string $group_id;
    
}