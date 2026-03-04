<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享信息
class ToolsEbpAssetAuthPostParamAuthTargetsData extends Data
{

    /**
     * @var string $auth_target_type 共享模式，允许值：
     */
    public string $auth_target_type;

    /**
     * @var int $target_id 共享目标账户ID
     */
    public int $target_id;

    /**
     * @var array<string> $sub_target 业务线类型，允许值：AD 巨量营销QIANCHUAN 巨量千川LOCAL 巨量本地推
     */
    public array $sub_target;

}