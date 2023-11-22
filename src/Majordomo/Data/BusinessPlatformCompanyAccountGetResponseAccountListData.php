<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Data;

use AdOceanSdk\Kernel\Data\Data;

// 账户列表
class BusinessPlatformCompanyAccountGetResponseAccountListData extends Data
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;
    
    /**
     * @var string $account_type 账户类型， 枚举值：AD 巨量广告账户、QIANCHUAN 千川广告账户
     */
    public string $account_type;
    
}