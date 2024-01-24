<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 本地视频内容，与在线视频内容二选一
class SiteTemplateSiteCreatePostParamBricksVideoLocalVideoData extends Data
{

    /**
     * @var string $video_id 视频ID，本地视频上传后得到的视频云id，对应的是【获取视频素材】接口获取的视频ID，当local_video不为空时，必填
     */
    public string $video_id;
    
    /**
     * @var string $poster_url 用户自行上传的图片url，当local_video不为空时，必填
     */
    public string $poster_url;
    
}