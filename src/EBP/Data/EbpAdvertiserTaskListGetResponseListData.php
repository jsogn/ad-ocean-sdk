<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Data;

use AdOceanSdk\Kernel\Data\Data;

// 任务列表
class EbpAdvertiserTaskListGetResponseListData extends Data
{

    /**
     * @var int $task_id 任务id
     */
    public int $task_id;

    /**
     * @var string $task_status 任务状态
     */
    public string $task_status;

    /**
     * @var string $create_time 任务创建时间。格式：%Y-%m-%d %H:%M:%S
     */
    public string $create_time;

    /**
     * @var string $err_msg 任务失败时，这个字段表示失败原因
     */
    public string $err_msg;

}