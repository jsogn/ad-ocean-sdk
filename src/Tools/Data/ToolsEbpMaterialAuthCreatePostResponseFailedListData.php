<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享失败的EBP组织列表
class ToolsEbpMaterialAuthCreatePostResponseFailedListData extends Data
{

    /**
     * @var int $target_ebp_id 被共享的EBP组织ID
     */
    public int $target_ebp_id;

    /**
     * @var string $target_ebp_range 被共享的组织范围，枚举值: ALL 全部SELF 仅直属
     */
    public string $target_ebp_range;

    /**
     * @var string $fail_reason 推送失败原因
     */
    public string $fail_reason;

}