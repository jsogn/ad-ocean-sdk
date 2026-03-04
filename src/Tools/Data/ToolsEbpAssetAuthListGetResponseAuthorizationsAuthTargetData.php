<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享账户范围
class ToolsEbpAssetAuthListGetResponseAuthorizationsAuthTargetData extends Data
{

    /**
     * @var string $auth_target_type 共享类型，枚举值：
     */
    public string $auth_target_type;

    /**
     * @var int $target_id 共享目标账户ID
     */
    public int $target_id;

    /**
     * @var string $target_name 共享目标账户名称
     */
    public string $target_name;

    /**
     * @var int $depth 升级版组织层级，根节点=0，普通版工作台组织不会返回
     */
    public int $depth;

}