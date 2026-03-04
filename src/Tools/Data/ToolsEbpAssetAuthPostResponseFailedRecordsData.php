<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享失败信息
class ToolsEbpAssetAuthPostResponseFailedRecordsData extends Data
{

    /**
     * @var int $id 共享记录ID
     */
    public int $id;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpAssetAuthPostResponseFailedRecordsAccountData $account 操作共享的账户
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpAssetAuthPostResponseFailedRecordsAccountData $account;

    /**
     * @var int $auth_type 授权类型 ebp一期只支持1: 节点内授权
     */
    public int $auth_type;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpAssetAuthPostResponseFailedRecordsAssetScopeData $asset_scope 共享的资产范围 (单个资产、组织直属资产、组织及下属组织资产)
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpAssetAuthPostResponseFailedRecordsAssetScopeData $asset_scope;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpAssetAuthPostResponseFailedRecordsAuthTargetData $auth_target 共享账户范围
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpAssetAuthPostResponseFailedRecordsAuthTargetData $auth_target;

    /**
     * @var bool $is_default_auth true代表为默认授权，不可取消
     */
    public bool $is_default_auth;

    /**
     * @var int $account_depth 共享发起方在升级版组织中的层级，根节点=0
     */
    public int $account_depth;

}