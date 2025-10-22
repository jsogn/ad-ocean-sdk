<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 巨量广告/千川/本地推业务线已分配余额(单位元)
class SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdSharedAllocatedBalanceData extends Data
{

    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdSharedAllocatedBalanceAvailableBalanceData $available_balance 可用余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdSharedAllocatedBalanceAvailableBalanceData $available_balance;
    
    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdSharedAllocatedBalanceUnavailableBalanceData $unavailable_balance 不可用余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdSharedAllocatedBalanceUnavailableBalanceData $unavailable_balance;
    
}