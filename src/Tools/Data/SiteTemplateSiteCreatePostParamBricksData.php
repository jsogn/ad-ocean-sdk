<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 组件列表，可按需填充部分组件，未填充部分会使用原模板内容。
class SiteTemplateSiteCreatePostParamBricksData extends Data
{

    /**
     * @var string $type 组件类型，允许值：BUTTON按钮组件、COUPON卡券组件、FORM表单组件、PICTURE图片组件、PICTURE_GROUP组图组件、RICH_TEXT富文本组件、SIMPLE_TEXT文本组件、VIDEO视频组件、WECHAT_GAME微信小游戏组件、WECHAT_APPLET微信小程序组件
     */
    public string $type;
    
    /**
     * @var string $index 组件在模板中的位置描述，需和【基于站点创建模板】接口返回的组件index保持一致
     */
    public string $index;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksVideoData $video 视频组件描述，当type为VIDEO时，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksVideoData $video;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksPictureData $picture 图片组件描述，当type为PICTURE时，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksPictureData $picture;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksPictureGroupData $picture_group 组图组件描述，当type为PICTURE_GROUP时，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksPictureGroupData $picture_group;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksTextData $text 文本组件描述，当type为SIMPLE_TEXT或RICH_TEXT时，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksTextData $text;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonData $button 按钮组件描述，当type为BUTTON时，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonData $button;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksFormData $form 表单组件描述，当type为FORM时，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksFormData $form;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksCouponData $coupon 发券组件描述，当type为COUPON时，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksCouponData $coupon;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksWechatGameData $wechat_game 微信小游戏组件描述，当type为WECHAT_GAME时，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksWechatGameData $wechat_game;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksWechatAppletData $wechat_applet 微信小程序组件描述，当type为WECHAT_APPLET时，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksWechatAppletData $wechat_applet;
    
}