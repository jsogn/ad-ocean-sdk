<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 转账记录
class AgentTransferTransactionRecordGetResponseRecordsData extends Data
{

    /**
     * @var string $modify_time 转账时间
     */
    public string $modify_time;
    
    /**
     * @var string $remitter 转账时间转出方账户ID
     */
    public string $remitter;
    
    /**
     * @var string $remitter_first_ad_agent_id 转出方一代账户ID
     */
    public string $remitter_first_ad_agent_id;
    
    /**
     * @var string $remitter_first_ad_agent_name 转出方一代账户名称
     */
    public string $remitter_first_ad_agent_name;
    
    /**
     * @var string $remitter_second_ad_agent_id 转出方二代账户ID
     */
    public string $remitter_second_ad_agent_id;
    
    /**
     * @var string $payee_first_ad_agent_id 转入方一代账户ID
     */
    public string $payee_first_ad_agent_id;
    
    /**
     * @var string $payee_second_ad_agent_id 转入方二代账户ID
     */
    public string $payee_second_ad_agent_id;
    
    /**
     * @var string $payee_first_ad_agent_name 转入方一代账户名称
     */
    public string $payee_first_ad_agent_name;
    
    /**
     * @var string $remitter_name 转出方账户名称
     */
    public string $remitter_name;
    
    /**
     * @var string $remitter_customer_name 转出方客户名称
     */
    public string $remitter_customer_name;
    
    /**
     * @var string $remitter_customer_id 转出方客户ID
     */
    public string $remitter_customer_id;
    
    /**
     * @var string $payee 转入方账户ID
     */
    public string $payee;
    
    /**
     * @var string $payee_name 转入方账户名称
     */
    public string $payee_name;
    
    /**
     * @var string $payee_role 转入方账户类型:
     */
    public string $payee_role;
    
    /**
     * @var string $remitter_role 转出方账户类型 :
     */
    public string $remitter_role;
    
    /**
     * @var string $payee_customer_name 转入方客户名称
     */
    public string $payee_customer_name;
    
    /**
     * @var string $payee_customer_id 转入方客户ID
     */
    public string $payee_customer_id;
    
    /**
     * @var float $amount 总金额（元）
     */
    public float $amount;
    
    /**
     * @var float $prepay_amount 预付金额（元）
     */
    public float $prepay_amount;
    
    /**
     * @var float $credit_amount 授信金额额（元）
     */
    public float $credit_amount;
    
    /**
     * @var float $cash 非赠款金额(元)
     */
    public float $cash;
    
    /**
     * @var float $grants 赠款金额(元)
     */
    public float $grants;
    
    /**
     * @var string $transfer_type 转账类型:
     */
    public string $transfer_type;
    
    /**
     * @var string $platform 业务平台:
     */
    public string $platform;
    
    /**
     * @var string $operator 操作人名称
     */
    public string $operator;
    
    /**
     * @var string $operator_id 操作人id
     */
    public string $operator_id;
    
    /**
     * @var string $transfer_order_serial 转账编号
     */
    public string $transfer_order_serial;
    
    /**
     * @var string $transfer_target_pay_status 转账状态 可选值:
     */
    public string $transfer_target_pay_status;
    
    /**
     * @var string $remark 转账备注
     */
    public string $remark;
    
}