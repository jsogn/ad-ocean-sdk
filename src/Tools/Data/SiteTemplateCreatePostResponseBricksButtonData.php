<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 按钮组件描述
class SiteTemplateCreatePostResponseBricksButtonData extends Data
{

    /**
     * @var string $event_type 事件行为类型，当button不为空时，有返回值，枚举值：APPOINT_EVENT预约事件行为、DOWNLOAD_EVENT下载事件行为、LINK_ENENT链接事件行为、TELEPHONE_EVENT电话事件行为
     */
    public string $event_type;
    
    /**
     * @var string $bg_image_url linkEvent事件自定义图片链接
     */
    public string $bg_image_url;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksButtonDownloadEventData $download_event downloadEvent事件行为描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksButtonDownloadEventData $download_event;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksButtonLinkEventData $link_event linkEvent事件行为描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksButtonLinkEventData $link_event;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksButtonPhoneEventData $phone_event phoneEvent事件行为描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksButtonPhoneEventData $phone_event;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksButtonAppointEventData $appoint_event appointEvent事件行为描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksButtonAppointEventData $appoint_event;
    
}