<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 取消共享失败的账号列表，该字段为空则代表全部取消成功
class ToolsBpAssetManagementShareCancelPostResponseErrorListData extends Data
{

    /**
     * @var string $share_mode 共享类型
允许值：PART 指定账户共享、BP_ALL_ACCOUNTS 组织内某类账户所有共享、COMPANY_ALL_ACCOUNTS公司主体内部分账户共享
共享类型为PART，读取account_info；
共享类型为BP_ALL_ACCOUNTS，读取all_account_by_bp，即表示该业务线下的全量账号；共享类型为COMPANY_ALL_ACCOUNTS，读取all_account_by_company
     */
    public string $share_mode;
    
    /**
     * @var string $error_message 取消共享失败的原因
     */
    public string $error_message;
    
    /**
     * @var string $all_accounts_by_bp 可选值:
     */
    public string $all_accounts_by_bp;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareCancelPostResponseErrorListAccountInfoData $account_info 共享账号信息
     */
    public \AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareCancelPostResponseErrorListAccountInfoData $account_info;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareCancelPostResponseErrorListAllAccountsByCompanyData $all_accounts_by_company 主体共享账号信息
     */
    public \AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareCancelPostResponseErrorListAllAccountsByCompanyData $all_accounts_by_company;
    
}