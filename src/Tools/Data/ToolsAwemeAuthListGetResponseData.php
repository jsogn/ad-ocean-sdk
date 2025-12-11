<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsAwemeAuthListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsAwemeAuthListGetResponseListData> $list 数据列表
     */
    public array $list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}