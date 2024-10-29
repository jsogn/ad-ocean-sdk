<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class FileUploadTaskCreatePostResponseData extends Data
{

    /**
     * @var int $task_id 任务ID
     */
    public int $task_id;
    
}