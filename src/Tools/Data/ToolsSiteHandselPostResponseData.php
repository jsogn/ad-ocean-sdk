<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsSiteHandselPostResponseData extends Data
{
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsSiteHandselPostResponseSuccessListData> $success_list 转赠成功列表，整体失败不返回该列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsSiteHandselPostResponseSuccessListData::class)]
    public array $success_list;

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsSiteHandselPostResponseErrorListData> $error_list 转赠失败列表，整体成功不返回该列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsSiteHandselPostResponseErrorListData::class)]
    public array $error_list;

}