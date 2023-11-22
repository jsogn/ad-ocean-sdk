<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class AgentTransferSeqCommitPostParams extends RequestParams
{

    /**
     * @var int $transfer_seq  转账流水号，第一步请求会返回
     */
    public int $transfer_seq ;
    
    /**
     * @var int $agent_id  代理商ID
     */
    public int $agent_id ;
    
}