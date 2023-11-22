<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class AdvertiserBudgetUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;

    /**
     * @var string $budget_mode 预算模式，详见【附录-枚举值】，可选值:BUDGET_MODE_DAY（日预算）BUDGET_MODE_INFINITE（不限）
     */
    public string $budget_mode;

    /**
     * @var float $budget 预算值，取值范围：1000～9999999.99，当budget_mode=BUDGET_MODE_DAY时，必填单位：元； 最小值：0； 精度：小数点后两位举例：100.01
     */
    public float $budget;

}