<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 主体共享账号信息
class ToolsBpAssetManagementShareCancelPostResponseErrorListAllAccountsByCompanyData extends Data
{

    /**
     * @var string $account_type 可选值:
     */
    public string $account_type;
    
    /**
     * @var int $company_id 账号id
     */
    public int $company_id;
    
}