<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频组件描述
class SiteTemplateCreatePostResponseBricksVideoData extends Data
{

    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksVideoLocalVideoData $local_video 本地视频内容
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksVideoLocalVideoData $local_video;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksVideoOnlineVideoData $online_video 在线视频内容
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksVideoOnlineVideoData $online_video;
    
}