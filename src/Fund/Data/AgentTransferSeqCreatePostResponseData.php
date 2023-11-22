<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class AgentTransferSeqCreatePostResponseData extends Data
{

    /**
     * @var int $transfer_seq 转账序列号，第二步提交操作需要
     */
    public int $transfer_seq;
    
}