<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 取消共享账户信息，一次最多操作10个当share_mode="PART"时必填
class EventManagerShareCancelPostParamAccountInfosData extends Data
{

    /**
     * @var int $account_id 账户id
     */
    public int $account_id;
    
    /**
     * @var string $account_type 账户类型，可选值:AD
     */
    public string $account_type;
    
}