<?php

declare(strict_types=1);

namespace AdOceanSdk\Agent\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AgentChildAgentSelectGetResponseData extends Data
{

    /**
     * @var array<int> $child_agent_ids 二级代理商ID列表
     */
    public array $child_agent_ids;
    
}