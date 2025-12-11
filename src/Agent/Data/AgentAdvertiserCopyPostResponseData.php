<?php

declare(strict_types=1);

namespace AdOceanSdk\Agent\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AgentAdvertiserCopyPostResponseData extends Data
{

    /**
     * @var int $copy_status 复制结果状态码 可选值:
     */
    public int $copy_status;
    
    /**
     * @var array<\AdOceanSdk\Agent\Data\AgentAdvertiserCopyPostResponseItemData> $item 复制结果，包括单个账户的失败原因
     */
    public array $item;
    
}