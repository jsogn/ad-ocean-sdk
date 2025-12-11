<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AccountFundGetGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Fund\Data\AccountFundGetGetResponseListData> $list 账户余额列表，金额单位：分
     */
    public array $list;
    
}