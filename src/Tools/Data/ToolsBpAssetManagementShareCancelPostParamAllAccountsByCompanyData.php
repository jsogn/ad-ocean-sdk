<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 取消主体共享账号信息，一次最多操作1个
//当share_mode为 COMPANY_ALL_ACCOUNTS时可用且必填
class ToolsBpAssetManagementShareCancelPostParamAllAccountsByCompanyData extends Data
{

    /**
     * @var string $account_type 可选值:
     */
    public string $account_type;
    
    /**
     * @var int $company_id 账号id， 一次最多操作1个
     */
    public int $company_id;
    
}