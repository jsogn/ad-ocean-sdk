<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 组件列表
class SiteTemplateGetResponseListBricksData extends Data
{

    /**
     * @var string $type 组件类型 枚举值：BUTTON按钮组件、COUPON卡券组件、FORM表单组件、PICTURE图片组件、PICTURE_GROUP组图组件、RICH_TEXT富文本组件、SIMPLE_TEXT文本组件、VIDEO视频组件、WECHAT_GAME微信小游戏组件、WECHAT_APPLET微信小程序组件
     */
    public string $type;
    
    /**
     * @var string $index 组件在模板中的位置描述
     */
    public string $index;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksVideoData $video 视频组件描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksVideoData $video;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksData $ 图片组件描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksData $;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksPictureGroupData $picture_group 组图组件描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksPictureGroupData $picture_group;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksTextData $text 文本组件描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksTextData $text;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksButtonData $button 按钮组件描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksButtonData $button;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksFormData $form 表单组件描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksFormData $form;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksCouponData $coupon 发券组件描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksCouponData $coupon;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksWechatGameData $wechat_game 微信小游戏组件描述
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksWechatGameData $wechat_game;
    
}