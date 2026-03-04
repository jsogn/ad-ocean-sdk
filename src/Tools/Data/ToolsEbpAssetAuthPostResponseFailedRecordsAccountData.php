<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 操作共享的账户
class ToolsEbpAssetAuthPostResponseFailedRecordsAccountData extends Data
{

    /**
     * @var int $account_type 请求账号的类型，枚举值：
     */
    public int $account_type;

    /**
     * @var int $account_id 操作共享的账户id（升级版组织id）
     */
    public int $account_id;

}