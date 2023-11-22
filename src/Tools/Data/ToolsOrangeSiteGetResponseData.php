<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsOrangeSiteGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsOrangeSiteGetResponseListData> $list 建站列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsOrangeSiteGetResponseListData::class)]
    public array $list;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsOrangeSiteGetResponseOptimizeGoalData $optimize_goal 优化目标
     */
    public \AdOceanSdk\Tools\Data\ToolsOrangeSiteGetResponseOptimizeGoalData $optimize_goal;
    
}