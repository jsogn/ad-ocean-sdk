<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsLandingGroupCreatePostResponseData extends Data
{

    /**
     * @var int $group_id 落地页组 ID
     */
    public int $group_id;
    
    /**
     * @var string $group_title 落地页组名称
     */
    public string $group_title;
    
    /**
     * @var string $group_url 落地页组 URL
     */
    public string $group_url;
    
    /**
     * @var string $group_status 落地页组状态。详见详见【附录-枚举值-落地页组状态】
     */
    public string $group_status;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsLandingGroupCreatePostResponseGroupFlowTypeData $group_flow_type 流量分配方式。详见详见【附录-枚举值-落地页组流量分配方式】
     */
    public \AdOceanSdk\Tools\Data\ToolsLandingGroupCreatePostResponseGroupFlowTypeData $group_flow_type;
    
}