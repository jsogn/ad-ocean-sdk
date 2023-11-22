<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享账号信息
class EventManagerSharePostResponseErrorListAccountInfoData extends Data
{

    /**
     * @var int $account_id 账户id
     */
    public int $account_id;
    
    /**
     * @var string $account_type 账户类型
     */
    public string $account_type;
    
}