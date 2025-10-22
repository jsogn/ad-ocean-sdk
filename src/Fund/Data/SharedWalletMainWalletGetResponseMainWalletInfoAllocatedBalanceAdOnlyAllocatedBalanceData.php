<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 巨量广告业务线已分配余额(单位元)
class SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalanceData extends Data
{

    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalanceAvailableBalanceData $available_balance 可用余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalanceAvailableBalanceData $available_balance;
    
    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalanceUnavailableBalanceData $unavailable_balance 不可用余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalanceUnavailableBalanceData $unavailable_balance;
    
}