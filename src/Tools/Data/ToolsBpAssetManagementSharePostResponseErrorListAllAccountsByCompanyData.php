<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 主体信息
class ToolsBpAssetManagementSharePostResponseErrorListAllAccountsByCompanyData extends Data
{

    /**
     * @var string $account_type 可选值:
     */
    public string $account_type;
    
    /**
     * @var int $company_id 公司主体ID
     */
    public int $company_id;
    
}