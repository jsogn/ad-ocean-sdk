<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserTransferableFundGetResponseData extends Data
{

    /**
     * @var float $grant_valid 可转赠款余额(单位元)
     */
    public float $grant_valid;
    
    /**
     * @var float $cash_transfer_balance 可转现金余额(单位元)
     */
    public float $cash_transfer_balance;
    
    /**
     * @var float $universal_prepay_valid 通用预付可转余额(单位元)
     */
    public float $universal_prepay_valid;
    
    /**
     * @var float $brand_prepay_valid 品牌预付可转余额(单位元)
     */
    public float $brand_prepay_valid;
    
    /**
     * @var float $bid_prepay_valid 竞价预付可转余额(单位元)
     */
    public float $bid_prepay_valid;
    
    /**
     * @var float $universal_credit_valid 通用授信可转余额(单位元)
     */
    public float $universal_credit_valid;
    
    /**
     * @var float $brand_credit_valid 品牌授信可转余额(单位元)
     */
    public float $brand_credit_valid;
    
    /**
     * @var float $bid_credit_valid 竞价授信可转余额(单位元)
     */
    public float $bid_credit_valid;
    
    /**
     * @var float $deposit_amount 保证金(单位元)
     */
    public float $deposit_amount;
    
}