<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 微信小程序组件描述，当type为WECHAT_APPLET时，必填
class SiteTemplateSiteCreatePostParamBricksWechatAppletData extends Data
{

    /**
     * @var int $instance_id 微信小程序组件ID，当wechat_applet不为空时，有返回值。用户可以【获取微信小程序列表】接口或通过【青鸟线索通平台】获取微信小程序组件ID
     */
    public int $instance_id;
    
    /**
     * @var array[string] $items 标签，个数不超过2，字数不超过5个中文字符
     */
    public array[string] $items;
    
    /**
     * @var string $introduction 简介，长度不超过40个中文字符
     */
    public string $introduction;
    
    /**
     * @var string $logo logo链接地址
     */
    public string $logo;
    
}