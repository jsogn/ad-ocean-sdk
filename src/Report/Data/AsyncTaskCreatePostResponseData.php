<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AsyncTaskCreatePostResponseData extends Data
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;

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
     * @var string $task_name 任务名称。最大长度 25 个字符，不能为空字符。
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