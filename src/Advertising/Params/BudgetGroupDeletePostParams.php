<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class BudgetGroupDeletePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $budget_group_ids 要删除的预算组id列表，请注意：
     */
    public array $budget_group_ids;
    
}