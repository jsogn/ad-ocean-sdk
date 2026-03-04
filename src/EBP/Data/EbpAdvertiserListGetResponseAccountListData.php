<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Data;

use AdOceanSdk\Kernel\Data\Data;

// 账户列表
class EbpAdvertiserListGetResponseAccountListData extends Data
{

    /**
     * @var int $account_id 账户id
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，枚举值：
     */
    public string $account_type;

    /**
     * @var string $account_name 账户名称
     */
    public string $account_name;

}