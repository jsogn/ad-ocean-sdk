<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CustomerCenterFundTransferSeqCreatePostResponseData extends Data
{

    /**
     * @var int $transaction_seq 交易流水号
     */
    public int $transaction_seq;
    
}