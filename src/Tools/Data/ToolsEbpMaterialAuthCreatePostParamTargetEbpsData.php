<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 被共享的EBP组织，数量限制[1,20]
class ToolsEbpMaterialAuthCreatePostParamTargetEbpsData extends Data
{

    /**
     * @var int $target_ebp_id 被共享的EBP组织ID
     */
    public int $target_ebp_id;

    /**
     * @var string $target_ebp_range 被共享的组织范围，可选值: ALL 全部SELF 仅直属
     */
    public string $target_ebp_range;

}