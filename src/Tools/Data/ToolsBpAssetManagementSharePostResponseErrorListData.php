<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享失败列表，列表为空则代表全部共享成功
class ToolsBpAssetManagementSharePostResponseErrorListData extends Data
{

    /**
     * @var string $share_mode 共享类型
允许值：PART 指定账户共享、BP_ALL_ACCOUNTS组织内所有账户共享、COMPANY_ALL_ACCOUNTS 公司主体内所有账户共享
共享类型为PART，读取account_infos；
共享类型为BP_ALL_ACCOUNTS，读取all_account_by_bp，即表示该业务线下的全量账号；共享类型为COMPANY_ALL_ACCOUNTS，读取all_account_by_company
     */
    public string $share_mode;
    
    /**
     * @var string $error_message 共享失败原因
     */
    public string $error_message;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsBpAssetManagementSharePostResponseErrorListAccountInfoData $account_info 共享账号信息
     */
    public \AdOceanSdk\Tools\Data\ToolsBpAssetManagementSharePostResponseErrorListAccountInfoData $account_info;
    
    /**
     * @var string $all_accounts_by_bp 组织内业务线 可选值:
     */
    public string $all_accounts_by_bp;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsBpAssetManagementSharePostResponseErrorListAllAccountsByCompanyData $all_accounts_by_company 主体信息
     */
    public \AdOceanSdk\Tools\Data\ToolsBpAssetManagementSharePostResponseErrorListAllAccountsByCompanyData $all_accounts_by_company;
    
}