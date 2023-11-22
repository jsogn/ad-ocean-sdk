<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class AgentTransferSeqCommitPostResponseData extends Data
{

    /**
     * @var int $transfer_seq 转账序列化，第一步返回
     */
    public int $transfer_seq;
    
}