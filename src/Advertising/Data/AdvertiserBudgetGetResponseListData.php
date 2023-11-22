<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class AdvertiserBudgetGetResponseListData extends Data
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var float $budget 预算，单位：元； 精度：小数点后两位；举例：100.01。当预算类型为不限，返回的预算为0.0
     */
    public float $budget;
    
    /**
     * @var string $budget_mode 详见【附录-预算类型】，可选值:BUDGET_MODE_DAY（日预算）BUDGET_MODE_INFINITE（不限）
     */
    public string $budget_mode;
    
}