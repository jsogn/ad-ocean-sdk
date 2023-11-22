<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 筛选条件
class ToolsAwemeAuthListGetParamFilteringData extends Data
{

    /**
     * @var array<string> $auth_type 授权类型，允许值：AWEME_ACCOUNT抖音号授权、VIDEO_ITEM单视频授权
     */
    public array $auth_type;
    
    /**
     * @var array<string> $auth_status 授权状态，允许值：AUTHRIZED授权中、AUTHRIZING待授权确认、INVALID授权失效
     */
    public array $auth_status;
    
}