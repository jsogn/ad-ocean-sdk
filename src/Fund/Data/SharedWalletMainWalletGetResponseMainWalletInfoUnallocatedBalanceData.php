<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 钱包待分配余额(单位元)
class SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceData extends Data
{

    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceAdOnlyUnallocatedBalanceData $ad_only_unallocated_balance 巨量广告业务线待分配余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceAdOnlyUnallocatedBalanceData $ad_only_unallocated_balance;
    
    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceData $ecp_only_unallocated_balance 巨量千川业务线待分配余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceData $ecp_only_unallocated_balance;
    
    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceData $local_only_unallocated_balance 巨量本地推业务线待分配余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceData $local_only_unallocated_balance;
    
    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalanceData $ad_shared_unallocated_balance 巨量广告/千川/本地推业务线待分配余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalanceData $ad_shared_unallocated_balance;
    
}