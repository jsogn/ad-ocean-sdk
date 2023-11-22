<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class AgentRefundTransferSeqCreatePostResponseData extends Data
{

    /**
     * @var int $refund_seq 退款序列号，第二步提交操作需要
     */
    public int $refund_seq;
    
}