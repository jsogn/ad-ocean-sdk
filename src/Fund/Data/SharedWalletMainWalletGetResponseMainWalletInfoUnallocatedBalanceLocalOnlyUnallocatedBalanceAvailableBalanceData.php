<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 可用余额(单位元)
class SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceAvailableBalanceData extends Data
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
    
    /**
     * @var float $credit_general_balance 授信通用可用余额(单位元)
     */
    public float $credit_general_balance;
    
    /**
     * @var float $credit_bidding_balance 授信竞价可用余额(单位元)
     */
    public float $credit_bidding_balance;
    
    /**
     * @var int $credit_brand_balance 授信品牌可用余额(单位元)
     */
    public int $credit_brand_balance;
    
}