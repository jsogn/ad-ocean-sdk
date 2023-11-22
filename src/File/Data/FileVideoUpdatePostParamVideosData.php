<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 限制最多 100 个
class FileVideoUpdatePostParamVideosData extends Data
{

    /**
     * @var string $filename 视频素材名称，最多255个字，更新时必填
     */
    public string $filename;
    
    /**
     * @var string $video_id 视频id，更新必填
     */
    public string $video_id;
    
}