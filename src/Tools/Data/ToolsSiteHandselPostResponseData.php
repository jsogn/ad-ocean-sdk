<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsSiteHandselPostResponseData extends Data
{

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsSiteHandselPostResponseSuccessListData $success_list 转赠成功列表，整体失败不返回该列表
     */
    public \AdOceanSdk\Tools\Data\ToolsSiteHandselPostResponseSuccessListData $success_list;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsSiteHandselPostResponseErrorListData $error_list 转赠失败列表，整体成功不返回该列表
     */
    public \AdOceanSdk\Tools\Data\ToolsSiteHandselPostResponseErrorListData $error_list;
    
}