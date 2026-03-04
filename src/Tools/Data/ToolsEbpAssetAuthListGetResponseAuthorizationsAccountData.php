<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 操作共享的账户
class ToolsEbpAssetAuthListGetResponseAuthorizationsAccountData extends Data
{

    /**
     * @var string $account_type 请求账号的类型，枚举值：
     */
    public string $account_type;

    /**
     * @var int $account_id 操作共享的账户ID
     */
    public int $account_id;

}