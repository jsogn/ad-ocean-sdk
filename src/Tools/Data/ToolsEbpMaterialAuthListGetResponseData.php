<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsEbpMaterialAuthListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpMaterialAuthListGetResponseAuthListData> $auth_list 共享关系列表
     */
    public array $auth_list;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpMaterialAuthListGetResponsePageData $page 页码
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpMaterialAuthListGetResponsePageData $page;

}