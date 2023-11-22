<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 更新失败的项目ID列表
class ProjectScheduleTimeUpdatePostResponseErrorsData extends Data
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