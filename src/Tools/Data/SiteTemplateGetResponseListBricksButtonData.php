<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 按钮组件描述
class SiteTemplateGetResponseListBricksButtonData extends Data
{

    /**
     * @var string $event_type 事件行为类型，当button不为空时，有值 枚举值：APPOINT_EVENT预约事件行为、DOWNLOAD_EVENT下载事件行为、LINK_ENENT链接事件行为、TELEPHONE_EVENT电话事件行为
     */
    public string $event_type;
    
    /**
     * @var string $bg_image_url linkEvent事件自定义图片链接
     */
    public string $bg_image_url;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksButtonDownloadEventData $download_event DownloadEvent事件行为描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksButtonDownloadEventData $download_event;
    
    /**
     * @var string $link_type 链接类型，当link不为空时，有值 枚举值：QUICK_APP快应用地址、SCHEMEscheme地址、URL链接地址
     */
    public string $link_type;
    
    /**
     * @var string $url 链接地址，当link_type等于URL时，有值
     */
    public string $url;
    
    /**
     * @var string $description 应用描述，为了展示效果，推荐12个中文字符长度
     */
    public string $description;
    
    /**
     * @var string $quick_app 快应用地址，当link_type等于QUICK_APP时，有值
     */
    public string $quick_app;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksButtonLinkEventData $link_event LinkEvent事件行为描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksButtonLinkEventData $link_event;
    
    /**
     * @var string $scheme scheme地址，当link_type等于SCHEME时，有值
     */
    public string $scheme;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksButtonPhoneEventData $phone_event phoneEvent事件行为描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksButtonPhoneEventData $phone_event;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksButtonAppointEventData $appoint_event appointEvent事件行为描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksButtonAppointEventData $appoint_event;
    
}