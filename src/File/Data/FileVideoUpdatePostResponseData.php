<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class FileVideoUpdatePostResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\File\Data\FileVideoUpdatePostResponseVideosData> $videos 视频列表
     */
    public array $videos;
    
}