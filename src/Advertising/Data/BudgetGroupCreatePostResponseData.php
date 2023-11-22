<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class BudgetGroupCreatePostResponseData extends Data
{

    /**
     * @var int $budget_group_id 生成的预算组 ID
     */
    public int $budget_group_id;
    
}