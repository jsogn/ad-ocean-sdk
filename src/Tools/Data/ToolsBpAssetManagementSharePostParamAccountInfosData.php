<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享账号信息，当share_mode= PART时有效且必填，一次共享最多支持100个账号信息
class ToolsBpAssetManagementSharePostParamAccountInfosData extends Data
{

    /**
     * @var string $account_type 业务线，枚举值：AD 广告、BP 巨量纵横
     */
    public string $account_type;
    
    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;
    
}