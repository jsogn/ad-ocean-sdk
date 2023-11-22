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
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Fund\Data\FundSharedWalletBalanceGetResponseListData::class)]
    public array $list;
    
}