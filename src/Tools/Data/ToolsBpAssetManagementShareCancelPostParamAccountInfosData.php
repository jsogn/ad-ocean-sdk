<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 取消指定共享账号信息，一次最多取消共享到100个账号
当 share_mode 为PART时可用且必填
class ToolsBpAssetManagementShareCancelPostParamAccountInfosData extends Data
{

    /**
     * @var int $account_id 账号id
     */
    public int $account_id;
    
    /**
     * @var string $account_type 业务线
枚举值：AD 广告、BP 巨量纵横
     */
    public string $account_type;
    
}