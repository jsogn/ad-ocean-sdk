<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频列表
class FileVideoUpdatePostResponseVideosData extends Data
{

    /**
     * @var string $video_id 视频id
     */
    public string $video_id;
    
    /**
     * @var string $status_code 更新状态SUCCESS成功FAILURE失败（原因：操作视频非当前广告主所有或操作的视频不存在）
     */
    public string $status_code;
    
}