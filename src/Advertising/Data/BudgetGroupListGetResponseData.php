<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class BudgetGroupListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\BudgetGroupListGetResponseBudgetGroupsData> $budget_groups 预算组信息
     */
    public array $budget_groups;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}