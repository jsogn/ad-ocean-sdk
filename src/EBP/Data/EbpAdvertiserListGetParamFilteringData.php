<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤器
class EbpAdvertiserListGetParamFilteringData extends Data
{

    /**
     * @var string $account_name 账户名称
     */
    public string $account_name;

    /**
     * @var bool $active_account 是否是活跃账户
     */
    public bool $active_account;

}