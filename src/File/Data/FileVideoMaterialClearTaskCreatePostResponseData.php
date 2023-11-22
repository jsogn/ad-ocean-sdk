<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class FileVideoMaterialClearTaskCreatePostResponseData extends Data
{

    /**
     * @var int $clear_id 创建成功的素材清理任务id
     */
    public int $clear_id;
    
}