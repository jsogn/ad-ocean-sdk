<?php

declare(strict_types=1);

namespace AdOceanSdk\Agent\Params;

use AdOceanSdk\RequestParams;

class AgentInfoGetParams extends RequestParams
{

    /**
     * @var array<int> $advertiser_ids 代理商ids
     */
    public array $advertiser_ids;
    
    /**
     * @var array<string> $fields 查询字段集合, 如果指定, 则返回结果数组中, 每个元素是包含所查询字段的字典，默认全部指定.允许值:"agent_id","agent_name","customer_id","customer_name","company_id","company_name","create_time","role"
     */
    public array $fields;
    
}