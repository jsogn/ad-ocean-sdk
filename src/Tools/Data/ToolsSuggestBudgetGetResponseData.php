<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsSuggestBudgetGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsSuggestBudgetGetResponseListData> $list 预算列表
     */
    public array $list;
    
}