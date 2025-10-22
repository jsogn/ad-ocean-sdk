<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 可用余额(单位元)
class SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceAdSharedAllocatedBalanceAvailableBalanceData extends Data
{

    /**
     * @var float $prepay_general_balance 预付通用可用余额(单位元)
     */
    public float $prepay_general_balance;
    
    /**
     * @var float $prepay_bidding_balance 预付竞价可用余额(单位元)
     */
    public float $prepay_bidding_balance;
    
    /**
     * @var float $prepay_brand_balance 预付品牌可用余额(单位元)
     */
    public float $prepay_brand_balance;
    
}