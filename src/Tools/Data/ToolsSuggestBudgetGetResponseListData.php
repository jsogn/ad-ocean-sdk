<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 预算列表
class ToolsSuggestBudgetGetResponseListData extends Data
{

    /**
     * @var int $promotion_id 广告ID
     */
    public int $promotion_id;
    
    /**
     * @var int $promotion_budget 广告预算
     */
    public int $promotion_budget;
    
    /**
     * @var int $suggest_budget 建议起量预算
     */
    public int $suggest_budget;
    
}