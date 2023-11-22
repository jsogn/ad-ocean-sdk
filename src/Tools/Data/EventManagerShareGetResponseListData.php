<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享账户ID（adv+bpid+枚举值）集合
class EventManagerShareGetResponseListData extends Data
{

    /**
     * @var string $share_mode 共享类型
     */
    public string $share_mode;
    
    /**
     * @var \AdOceanSdk\Tools\Data\EventManagerShareGetResponseListAccountInfoData $account_info 共享账号信息
     */
    public \AdOceanSdk\Tools\Data\EventManagerShareGetResponseListAccountInfoData $account_info;
    
    /**
     * @var string $all_account_type 业务线
     */
    public string $all_account_type;
    
}