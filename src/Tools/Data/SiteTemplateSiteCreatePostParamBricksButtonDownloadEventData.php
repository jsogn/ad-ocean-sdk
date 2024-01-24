<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// downloadEvent事件行为描述，当event_type为DOWNLOAD_EVENT时，必填
class SiteTemplateSiteCreatePostParamBricksButtonDownloadEventData extends Data
{

    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonDownloadEventIosLinkData $ios_link ios链接信息，与android链接信息二选一
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonDownloadEventIosLinkData $ios_link;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonDownloadEventAndroidLinkData $android_link android链接信息，与ios链接信息二选一
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonDownloadEventAndroidLinkData $android_link;
    
}