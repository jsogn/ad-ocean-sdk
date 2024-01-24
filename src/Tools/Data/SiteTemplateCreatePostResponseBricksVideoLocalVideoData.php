<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 本地视频内容
class SiteTemplateCreatePostResponseBricksVideoLocalVideoData extends Data
{

    /**
     * @var string $video_id 视频ID，本地视频上传后可得到视频ID，可通过【获取视频素材】接口获取，当local_video不为空时，有返回值
     */
    public string $video_id;
    
    /**
     * @var string $poster_url 视频封面图片URL，当local_video不为空时，有返回值
     */
    public string $poster_url;
    
}