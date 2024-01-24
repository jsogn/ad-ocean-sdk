<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频组件描述，当type为VIDEO时，必填
class SiteTemplateSiteCreatePostParamBricksVideoData extends Data
{

    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksVideoLocalVideoData $local_video 本地视频内容，与在线视频内容二选一
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksVideoLocalVideoData $local_video;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksVideoOnlineVideoData $online_video 在线视频内容，与本地视频内容二选一
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksVideoOnlineVideoData $online_video;
    
}