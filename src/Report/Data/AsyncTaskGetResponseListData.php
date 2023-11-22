<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// data中的值，以下为list中每个元素的字段
class AsyncTaskGetResponseListData extends Data
{

    /**
     * @var string $task_type 任务类型
     */
    public string $task_type;
    
    /**
     * @var int $task_id 任务 id
     */
    public int $task_id;
    
    /**
     * @var array $task_params 任务参数
     */
    public array $task_params;
    
    /**
     * @var string $task_name 任务名称
     */
    public string $task_name;
    
    /**
     * @var string $create_time 任务创建时间。格式：%Y-%m-%d %H:%M:%S
     */
    public string $create_time;
    
    /**
     * @var string $task_status 任务状态。详见【附录-异步任务状态】
     */
    public string $task_status;
    
    /**
     * @var string $err_msg 任务失败时，这个字段表示失败原因
     */
    public string $err_msg;
    
    /**
     * @var int $file_size 任务完成时，这个字段表示生成文件的大小
     */
    public int $file_size;
    
}