<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsBpAssetManagementShareCancelPostParams extends RequestParams
{

    /**
     * @var int $organization_id 当前纵横组织账户ID
     */
    public int $organization_id;
    
    /**
     * @var string $asset_type 可选值:
     */
    public string $asset_type;
    
    /**
     * @var int $instance_id 微信小游戏/小程序资产ID
     */
    public int $instance_id;
    
    /**
     * @var string $share_mode 共享类型
允许值：PART 指定账户共享、BP_ALL_ACCOUNTS 组织内所有账户共享、COMPANY_ALL_ACCOUNTS公司主体内所有账户共享
     */
    public string $share_mode;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareCancelPostParamAccountInfosData> $account_infos 取消指定共享账号信息，一次最多取消共享到100个账号
当 share_mode 为PART时可用且必填
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareCancelPostParamAccountInfosData::class)]
    public array $account_infos;
    
    /**
     * @var array<string> $all_accounts_by_bp 取消共享账号类别，一次最多操作1个，枚举值：AD 广告
当 share_mode 为BP_ALL_ACCOUNTS时可用且必填
     */
    public array $all_accounts_by_bp;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareCancelPostParamAllAccountsByCompanyData> $all_accounts_by_company 取消主体共享账号信息，一次最多操作1个
当share_mode为 COMPANY_ALL_ACCOUNTS时可用且必填
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareCancelPostParamAllAccountsByCompanyData::class)]
    public array $all_accounts_by_company;
    
}