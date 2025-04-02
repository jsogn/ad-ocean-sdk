<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsClueGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsClueGetResponseListData> $list 线索列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsClueGetResponseListData::class)]
    public array $list;
    
}