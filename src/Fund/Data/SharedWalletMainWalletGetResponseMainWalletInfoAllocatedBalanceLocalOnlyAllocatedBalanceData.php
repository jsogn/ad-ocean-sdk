<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 巨量本地推业务线已分配余额(单位元)
class SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceData extends Data
{

    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceAvailableBalanceData $available_balance 可用余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceAvailableBalanceData $available_balance;
    
    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceUnavailableBalanceData $unavailable_balance 不可用余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceUnavailableBalanceData $unavailable_balance;
    
}