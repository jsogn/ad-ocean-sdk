<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsLogSearchGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsLogSearchGetResponseLogsData $logs 日志详情
     */
    public \AdOceanSdk\Tools\Data\ToolsLogSearchGetResponseLogsData $logs;
    
}