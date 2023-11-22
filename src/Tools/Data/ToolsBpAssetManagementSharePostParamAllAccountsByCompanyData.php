<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 公司主体信息，一次最多操作1个
//当share_mode为 COMPANY_ALL_ACCOUNTS时有效且必填
class ToolsBpAssetManagementSharePostParamAllAccountsByCompanyData extends Data
{

    /**
     * @var string $account_type 业务线 可选值:
     */
    public string $account_type;
    
    /**
     * @var int $company_id 公司主体ID，一次最多操作1个
     */
    public int $company_id;
    
}