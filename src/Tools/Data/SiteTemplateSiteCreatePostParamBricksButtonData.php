<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 按钮组件描述，当type为BUTTON时，必填
class SiteTemplateSiteCreatePostParamBricksButtonData extends Data
{

    /**
     * @var string $event_type 事件行为类型，当button不为空时，必填，允许值：APPOINT_EVENT预约事件行为、DOWNLOAD_EVENT下载事件行为、LINK_ENENT链接事件行为、TELEPHONE_EVENT电话事件行为
     */
    public string $event_type;
    
    /**
     * @var string $bg_image_url linkEvent事件自定义图片链接
     */
    public string $bg_image_url;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonDownloadEventData $download_event downloadEvent事件行为描述，当event_type为DOWNLOAD_EVENT时，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonDownloadEventData $download_event;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonLinkEventData $link_event linkEvent事件行为描述，当event_type为LINK_ENENT，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonLinkEventData $link_event;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonPhoneEventData $phone_event phoneEvent事件行为描述，当event_type为PHONE_EVENT时，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonPhoneEventData $phone_event;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonAppointEventData $appoint_event appointEvent事件行为描述，当event_type为APPOINT_EVENT时，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonAppointEventData $appoint_event;
    
}