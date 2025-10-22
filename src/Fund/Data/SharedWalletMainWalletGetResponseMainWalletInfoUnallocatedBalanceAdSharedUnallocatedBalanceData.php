<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 巨量广告/千川/本地推业务线待分配余额(单位元)
class SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalanceData extends Data
{

    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalanceAvailableBalanceData $available_balance 可用余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalanceAvailableBalanceData $available_balance;
    
    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalanceUnavailableBalanceData $unavailable_balance 不可用余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalanceUnavailableBalanceData $unavailable_balance;
    
}