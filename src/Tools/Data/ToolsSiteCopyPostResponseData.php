<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsSiteCopyPostResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsSiteCopyPostResponseSuccessListData> $success_list 复制成功列表，整体失败不返回该列表
     */
    public array $success_list;

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsSiteCopyPostResponseErrorListData> $error_list 复制失败列表，整体成功不返回该列表
     */
    public array $error_list;

}