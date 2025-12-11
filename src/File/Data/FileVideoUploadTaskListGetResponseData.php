<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class FileVideoUploadTaskListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\File\Data\FileVideoUploadTaskListGetResponseListData> $list 任务列表
     */
    public array $list;
    
}