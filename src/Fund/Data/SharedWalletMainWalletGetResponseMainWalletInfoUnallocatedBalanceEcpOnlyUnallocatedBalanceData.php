<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 巨量千川业务线待分配余额(单位元)
class SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceData extends Data
{

    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceAvailableBalanceData $available_balance 可用余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceAvailableBalanceData $available_balance;
    
    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceUnavailableBalanceData $unavailable_balance 不可用余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceUnavailableBalanceData $unavailable_balance;
    
}