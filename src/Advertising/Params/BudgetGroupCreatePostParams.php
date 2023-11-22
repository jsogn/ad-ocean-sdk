<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class BudgetGroupCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主 ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $budget_group_name 预算组名称，50个字以内，预算组之间名称不可重复，不可为空
     */
    public string $budget_group_name;
    
    /**
     * @var double $budget_group_budget 日预算，单位：元，范围：[300，9,999,999]，预算组中的每个项目在实际消耗时，以【项目、预算组】中较低预算为准
     */
    public float $budget_group_budget;
    
    /**
     * @var string $campaign_type 广告类型 可选值:
     */
    public string $campaign_type;
    
    /**
     * @var string $delivery_mode 投放类型 可选值:
     */
    public string $delivery_mode;
    
}