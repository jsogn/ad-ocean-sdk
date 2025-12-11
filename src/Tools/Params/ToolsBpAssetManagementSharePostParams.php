<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsBpAssetManagementSharePostParams extends RequestParams
{

    /**
     * @var int $organization_id 组织ID
     */
    public int $organization_id;
    
    /**
     * @var int $instance_id 资产ID
     */
    public int $instance_id;
    
    /**
     * @var string $asset_type 资产类型 可选值:
     */
    public string $asset_type;
    
    /**
     * @var string $share_mode 共享类型 可选值:
     */
    public string $share_mode;
    
    /**
     * @var array<string> $all_accounts_by_bp 共享账号类别，当share_mode 为BP_ALL_ACCOUNTS时有效且必填，一次最多操作1个，枚举值：AD 广告
     */
    public array $all_accounts_by_bp;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsBpAssetManagementSharePostParamAccountInfosData> $account_infos 共享账号信息，当share_mode= PART时有效且必填，一次共享最多支持100个账号信息
     */
    public array $account_infos;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsBpAssetManagementSharePostParamAllAccountsByCompanyData> $all_accounts_by_company 公司主体信息，一次最多操作1个
当share_mode为 COMPANY_ALL_ACCOUNTS时有效且必填
     */
    public array $all_accounts_by_company;
    
}