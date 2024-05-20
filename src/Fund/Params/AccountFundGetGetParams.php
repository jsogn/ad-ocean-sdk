<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class AccountFundGetGetParams extends RequestParams
{

    /**
     * @var array<int> $account_ids 需要查询的账户ids，支持广告主、代理商、星图客户、星图MCN、星图服务商、本地推
     */
    public array $account_ids;
    
    /**
     * @var string $account_type 账户业务类型，可选值:
     */
    public string $account_type;
    
    /**
     * @var string $grant_type_split 是否拆分赠款类型，允许值：
     */
    public string $grant_type_split;
    
}