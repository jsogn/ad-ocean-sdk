<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享账号信息
class ToolsBpAssetManagementShareCancelPostResponseErrorListAccountInfoData extends Data
{

    /**
     * @var string $account_type 可选值:
     */
    public string $account_type;
    
    /**
     * @var int $account_id 账号id
     */
    public int $account_id;
    
}