<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class CustomerCenterFundTransferSeqCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id  转出账户
     */
    public int $advertiser_id ;
    
    /**
     * @var int $target_advertiser_id 转入账户
     */
    public int $target_advertiser_id;
    
    /**
     * @var float $amount 转账金额
     */
    public float $amount;
    
    /**
     * @var string $transfer_type 转账类型
     */
    public string $transfer_type;
    
}