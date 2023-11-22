<?php

declare(strict_types=1);

namespace AdOceanSdk\Agent\Data;

use AdOceanSdk\Kernel\Data\Data;

// 复制账户信息
class AgentAdvertiserCopyPostParamItemData extends Data
{

    /**
     * @var string $name 新广告主账户名称。不可重复
     */
    public string $name;
    
}