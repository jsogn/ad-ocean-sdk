<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享记录
class ToolsEbpAssetAuthListGetResponseAuthorizationsData extends Data
{

    /**
     * @var int $id 共享记录ID
     */
    public int $id;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpAssetAuthListGetResponseAuthorizationsAccountData $account 操作共享的账户
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpAssetAuthListGetResponseAuthorizationsAccountData $account;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpAssetAuthListGetResponseAuthorizationsAuthTargetData $auth_target 共享账户范围
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpAssetAuthListGetResponseAuthorizationsAuthTargetData $auth_target;

    /**
     * @var bool $is_default_auth true代表为默认授权，不可取消
     */
    public bool $is_default_auth;

    /**
     * @var int $account_depth 共享发起方在升级版组织中的层级，根节点=0
     */
    public int $account_depth;

}