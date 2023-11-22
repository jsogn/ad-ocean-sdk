<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class AgentRefundTransferSeqCommitPostParams extends RequestParams
{

    /**
     * @var int $agent_id  代理商ID
     */
    public int $agent_id ;
    
    /**
     * @var int $refund_seq  退款流水号，第一步请求会返回
     */
    public int $refund_seq ;
    
}