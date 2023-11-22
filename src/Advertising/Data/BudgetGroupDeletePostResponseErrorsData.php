<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 删除失败的预算组
class BudgetGroupDeletePostResponseErrorsData extends Data
{

    /**
     * @var int $budget_group_id 删除失败的预算组ID
     */
    public int $budget_group_id;
    
    /**
     * @var string $error_message 删除失败的原因
     */
    public string $error_message;
    
}