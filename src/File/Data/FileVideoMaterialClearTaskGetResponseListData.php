<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class FileVideoMaterialClearTaskGetResponseListData extends Data
{

    /**
     * @var int $clear_id 清理任务id
     */
    public int $clear_id;
    
    /**
     * @var \AdOceanSdk\File\Data\FileVideoMaterialClearTaskGetResponseListClearTaskParamsData $clear_task_params 任务的参数
     */
    public \AdOceanSdk\File\Data\FileVideoMaterialClearTaskGetResponseListClearTaskParamsData $clear_task_params;
    
    /**
     * @var string $create_time 任务创建时间，格式：%Y-%m-%d %H:%M:%S
     */
    public string $create_time;
    
    /**
     * @var string $task_status 任务状态:
     */
    public string $task_status;
    
}