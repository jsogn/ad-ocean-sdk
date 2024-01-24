<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// downloadEvent事件行为描述
class SiteTemplateCreatePostResponseBricksButtonDownloadEventData extends Data
{

    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksButtonDownloadEventIosLinkData $ios_link ios链接信息
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksButtonDownloadEventIosLinkData $ios_link;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksButtonDownloadEventAndroidLinkData $android_link android链接信息
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksButtonDownloadEventAndroidLinkData $android_link;
    
}