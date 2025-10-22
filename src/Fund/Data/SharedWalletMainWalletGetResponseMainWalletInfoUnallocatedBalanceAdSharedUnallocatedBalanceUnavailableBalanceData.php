<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 不可用余额(单位元)
class SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalanceUnavailableBalanceData extends Data
{

    /**
     * @var float $prepay_general_balance 预付通用不可用余额(单位元)
     */
    public float $prepay_general_balance;
    
    /**
     * @var float $prepay_bidding_balance 预付竞价不可用余额(单位元)
     */
    public float $prepay_bidding_balance;
    
    /**
     * @var float $prepay_brand_balance 预付品牌不可用余额(单位元)
     */
    public float $prepay_brand_balance;
    
}