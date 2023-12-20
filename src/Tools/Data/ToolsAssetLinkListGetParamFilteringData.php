<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class ToolsAssetLinkListGetParamFilteringData extends Data
{

    /**
     * @var int $instance_id 资产id
     */
    public int $instance_id;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsAssetLinkListGetParamFilteringCreateTimeData $create_time 按创建时间查询的时间范围
     */
    public \AdOceanSdk\Tools\Data\ToolsAssetLinkListGetParamFilteringCreateTimeData $create_time;
    
}