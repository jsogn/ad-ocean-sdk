<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class CustomerCenterAdvertiserListGetParamFilteringData extends Data
{

    /**
     * @var string $account_name 根据账户名称过滤
     */
    public string $account_name;
    
}