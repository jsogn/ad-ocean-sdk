<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class AgentRefundTransferSeqCreatePostParams extends RequestParams
{

    /**
     * @var int $agent_id  代理商账户ID
     */
    public int $agent_id ;
    
    /**
     * @var int $account_id  广告主账户ID
     */
    public int $account_id ;
    
    /**
     * @var string $transfer_type  转账类型 可选值:
     */
    public string $transfer_type ;
    
    /**
     * @var float $amount  转账金额，单位元，支持两位小数
     */
    public float $amount ;
    
}