<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 钱包已分配余额(单位元)
class SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceData extends Data
{

    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalanceData $ad_only_allocated_balance 巨量广告业务线已分配余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalanceData $ad_only_allocated_balance;
    
    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceEcpOnlyAllocatedBalanceData $ecp_only_allocated_balance 巨量千川业务线已分配余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceEcpOnlyAllocatedBalanceData $ecp_only_allocated_balance;
    
    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceData $local_only_allocated_balance 巨量本地推业务线已分配余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceData $local_only_allocated_balance;
    
    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdSharedAllocatedBalanceData $ad_shared_allocated_balance 巨量广告/千川/本地推业务线已分配余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdSharedAllocatedBalanceData $ad_shared_allocated_balance;
    
}