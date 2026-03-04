<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享账户范围
class ToolsEbpAssetAuthPostResponseFailedRecordsAuthTargetData extends Data
{

    /**
     * @var int $auth_target_type 共享模式，枚举值：
     */
    public int $auth_target_type;

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

    /**
     * @var int $auth_type 授权类型
     */
    public int $auth_type;

}