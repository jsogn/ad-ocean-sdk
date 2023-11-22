<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsWechatAppletCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $name 小程序名称，须与小程序实际名称保持一致，最大长度不超过50
     */
    public string $name;
    
    /**
     * @var string $user_name 小程序原始ID，获取方式：小程序后台>设置>基本设置>账号信息>原始ID，例如“gh_”，最大长度不超过20
     */
    public string $user_name;
    
    /**
     * @var string $path 小程序路径参数，如有跳转指定页面或自定义参数监测广告效果数据诉求，需填写。获取方式：登录关联的公众号后台>素材管理>新建图文素材>小程序>选择小程序>获取更多路径
     */
    public string $path;
    
    /**
     * @var string $remark_message 资产备注信息，最大长度不超过15
     */
    public string $remark_message;
    
    /**
     * @var string $icon_image_url 小程序icon图片的url，尺寸60*60px,大小不超2MB
     */
    public string $icon_image_url;
    
    /**
     * @var string $header_image_url 顶部头图的url，大小不超过5MB的图片，推荐尺寸2:1
     */
    public string $header_image_url;
    
    /**
     * @var array<string> $labels 小程序标签，每个标签长度不超过6，最多支持6个标签
     */
    public array $labels;
    
    /**
     * @var string $guide_text 引导文案，最大长度不超过14
     */
    public string $guide_text;
    
    /**
     * @var array<string> $images_vertical_url 小程序竖图的url地址，要求尺寸必须为3:5，否则报错。仅支持竖图和横图择其一类型上传，若同时上传两种类型的图片则报错小程序横图或竖图上传最少3张，最多8张，大小不超过5MB图片格式要求jpeg、png或gif
     */
    public array $images_vertical_url;
    
    /**
     * @var array<string> $images_horizontal_url 小程序竖图的url地址，要求尺寸必须为3:5，否则报错。仅支持竖图和横图择其一类型上传，若同时上传两种类型的图片则报错小程序横图或竖图上传最少3张，最多8张，大小不超过5MB图片格式要求jpeg、png或gif
     */
    public array $images_horizontal_url;
    
    /**
     * @var string $introduction 小程序简介，最大长度不超过50
     */
    public string $introduction;
    
}