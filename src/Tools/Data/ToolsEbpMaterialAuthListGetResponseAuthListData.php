<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享关系列表
class ToolsEbpMaterialAuthListGetResponseAuthListData extends Data
{

    /**
     * @var int $auth_id 共享记录ID
     */
    public int $auth_id;

    /**
     * @var int $target_ebp_id 被共享的EBP组织ID（不包含外部组织）
     */
    public int $target_ebp_id;

    /**
     * @var string $target_ebp_range 被共享的组织范围，枚举值: ALL 全部SELF 仅直属
     */
    public string $target_ebp_range;

}