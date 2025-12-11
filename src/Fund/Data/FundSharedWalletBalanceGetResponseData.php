<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class FundSharedWalletBalanceGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Fund\Data\FundSharedWalletBalanceGetResponseListData> $list 账户列表
     */
    public array $list;
    
}