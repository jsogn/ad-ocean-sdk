<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsEbpMaterialAuthCreatePostResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpMaterialAuthCreatePostResponseFailedListData> $failed_list 共享失败的EBP组织列表
     */
    public array $failed_list;

}