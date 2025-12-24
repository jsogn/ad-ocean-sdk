<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 任务列表
class FileVideoUploadTaskListGetResponseListData extends Data
{

    /**
     * @var string $status 任务处理状态，枚举值：PROCESS 处理中、SUCCESS 成功、FAILED 失败
     */
    public string $status;
    
    /**
     * @var string $error_msg 当任务失败后，会返回失败信息
     */
    public string $error_msg;
    
    /**
     * @var string $create_time 任务创建时间
     */
    public string $create_time;
    
    /**
     * @var int $task_id 任务id
     */
    public int $task_id;
    
    /**
     * @var \AdOceanSdk\File\Data\FileVideoUploadTaskListGetResponseListVideoInfoData|null $video_info 视频素材信息
     */
    public ?\AdOceanSdk\File\Data\FileVideoUploadTaskListGetResponseListVideoInfoData $video_info;
    
}