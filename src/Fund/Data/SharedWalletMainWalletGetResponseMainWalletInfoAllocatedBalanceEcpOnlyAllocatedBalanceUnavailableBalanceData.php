<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 不可用余额(单位元)
class SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceEcpOnlyAllocatedBalanceUnavailableBalanceData extends Data
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
    
    /**
     * @var float $credit_general_balance 授信通用不可用余额(单位元)
     */
    public float $credit_general_balance;
    
    /**
     * @var float $credit_bidding_balance 授信竞价不可用余额(单位元)
     */
    public float $credit_bidding_balance;
    
    /**
     * @var float $credit_brand_balance 授信品牌不可用余额(单位元)
     */
    public float $credit_brand_balance;
    
    /**
     * @var float $preloan_general_balance 预借款通用不可用余额(单位元)
     */
    public float $preloan_general_balance;
    
    /**
     * @var float $preloan_bidding_balance 预借款竞价不可用余额(单位元)
     */
    public float $preloan_bidding_balance;
    
    /**
     * @var float $preloan_brand_balance 预借款品牌不可用余额(单位元)
     */
    public float $preloan_brand_balance;
    
}