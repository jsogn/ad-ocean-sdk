<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 抖音视频预估用户覆盖量结果
class ToolsEstimateAudienceGetResponseAwemeData extends Data
{

    /**
     * @var int $num 覆盖量
     */
    public int $num;
    
}