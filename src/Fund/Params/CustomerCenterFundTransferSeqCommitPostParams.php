<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class CustomerCenterFundTransferSeqCommitPostParams extends RequestParams
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
     * @var int $transaction_seq 交易流水号
     */
    public int $transaction_seq;
    
}