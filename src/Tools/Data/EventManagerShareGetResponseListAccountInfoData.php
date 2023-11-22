<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享账号信息
class EventManagerShareGetResponseListAccountInfoData extends Data
{

    /**
     * @var int $account_id 账号id
     */
    public int $account_id;
    
    /**
     * @var string $account_type 业务线
     */
    public string $account_type;
    
}