<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsLandingGroupGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsLandingGroupGetResponseListData $list 落地页组信息
     */
    public \AdOceanSdk\Tools\Data\ToolsLandingGroupGetResponseListData $list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}