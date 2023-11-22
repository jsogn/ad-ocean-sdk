<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享账号列表
class ToolsBpAssetManagementShareGetResponseSharedAccountsData extends Data
{

    /**
     * @var string $share_mode 共享类型
允许值：PART 指定账户共享、BP_ALL_ACCOUNTS组织内所有账户共享、COMPANY_ALL_ACCOUNTS 公司主体内所有账户共享
共享类型为PART，读取account_infos；
共享类型为BP_ALL_ACCOUNTS，读取all_account_by_bp，即表示该业务线下的全量账号；共享类型为COMPANY_ALL_ACCOUNTS，读取all_account_by_company
     */
    public string $share_mode;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareGetResponseSharedAccountsAccountInfoData $account_info 共享账号信息
     */
    public \AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareGetResponseSharedAccountsAccountInfoData $account_info;
    
    /**
     * @var string $all_accounts_by_bp 可选值:
     */
    public string $all_accounts_by_bp;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareGetResponseSharedAccountsAllAccountsByCompanyData $all_accounts_by_company 主体共享账号信息
     */
    public \AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareGetResponseSharedAccountsAllAccountsByCompanyData $all_accounts_by_company;
    
}