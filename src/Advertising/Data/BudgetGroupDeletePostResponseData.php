<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class BudgetGroupDeletePostResponseData extends Data
{

    /**
     * @var array<int> $budget_group_ids 删除成功的预算组ID
     */
    public array $budget_group_ids;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\BudgetGroupDeletePostResponseErrorsData> $errors 删除失败的预算组
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\BudgetGroupDeletePostResponseErrorsData::class)]
    public array $errors;
    
}