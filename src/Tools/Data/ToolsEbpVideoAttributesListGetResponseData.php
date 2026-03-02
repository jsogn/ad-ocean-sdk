<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsEbpVideoAttributesListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpVideoAttributesListGetResponseMaterialsData> $materials 素材及素材属性列表
     */
    public array $materials;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpVideoAttributesListGetResponsePageData $page 分页信息
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpVideoAttributesListGetResponsePageData $page;

}