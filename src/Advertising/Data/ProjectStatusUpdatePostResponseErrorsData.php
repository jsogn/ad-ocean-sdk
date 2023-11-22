<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 更新失败的广告项目列表
class ProjectStatusUpdatePostResponseErrorsData extends Data
{

    /**
     * @var int $project_id 项目ID
     */
    public int $project_id;
    
    /**
     * @var string $error_message 错误信息
     */
    public string $error_message;
    
}