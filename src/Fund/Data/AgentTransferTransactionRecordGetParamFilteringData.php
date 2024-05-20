<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤器
class AgentTransferTransactionRecordGetParamFilteringData extends Data
{

    /**
     * @var array<int> $customer_ids 转入/转出方客户
     */
    public array $customer_ids;
    
    /**
     * @var array<int> $account_ids 转入/转出方账户
     */
    public array $account_ids;
    
    /**
     * @var array<int> $payees 转入方账号
     */
    public array $payees;
    
    /**
     * @var array<int> $payee_customer_ids 转入方客户
     */
    public array $payee_customer_ids;
    
    /**
     * @var array<int> $remitters 转出方账户
     */
    public array $remitters;
    
    /**
     * @var array<int> $remitter_customer_ids 转出方客户
     */
    public array $remitter_customer_ids;
    
    /**
     * @var array<int> $operator_ids 操作人
     */
    public array $operator_ids;
    
    /**
     * @var string $transfer_order_serial 转账编号
     */
    public string $transfer_order_serial;
    
    /**
     * @var string $transfer_type 转账类型 可选值:
     */
    public string $transfer_type;
    
    /**
     * @var string $remitter_type 转出方账户类型 可选值:
     */
    public string $remitter_type;
    
    /**
     * @var string $payee_type 转入方账户类型 可选值:
     */
    public string $payee_type;
    
    /**
     * @var string $platform 业务平台 可选值:
     */
    public string $platform;
    
    /**
     * @var int $remitter_first_ad_agent_id 转出方代理商账户
     */
    public int $remitter_first_ad_agent_id;
    
    /**
     * @var int $payee_first_ad_agent_id 转入方代理商账户
     */
    public int $payee_first_ad_agent_id;
    
}