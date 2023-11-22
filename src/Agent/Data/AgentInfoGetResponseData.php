<?php

declare(strict_types=1);

namespace AdOceanSdk\Agent\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AgentInfoGetResponseData extends Data
{

    /**
     * @var int $agent_id 代理商ID
     */
    public int $agent_id;
    
    /**
     * @var string $agent_name 代理商名称
     */
    public string $agent_name;
    
    /**
     * @var int $customer_id 客户id
     */
    public int $customer_id;
    
    /**
     * @var int $company_id 公司id
     */
    public int $company_id;
    
    /**
     * @var string $company_name 公司名称
     */
    public string $company_name;
    
    /**
     * @var string $account_status 用户状态
     */
    public string $account_status;
    
    /**
     * @var string $create_time 注册时间
     */
    public string $create_time;
    
    /**
     * @var string $role 角色
     */
    public string $role;
    
}