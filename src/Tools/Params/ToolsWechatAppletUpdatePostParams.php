<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsWechatAppletUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $instance_id 小程序资产ID
     */
    public int $instance_id;
    
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
     * @var array<string> $images_horizontal_url 小程序横图的url地址，要求尺寸必须为3:5，否则报错。仅支持竖图和横图择其一类型上传，若同时上传两种类型的图片则报错小程序横图或竖图上传最少3张，最多8张，大小不超过5MB图片格式要求jpeg、png或gif
     */
    public array $images_horizontal_url;
    
    /**
     * @var string $introduction 小程序简介，最大长度不超过50
     */
    public string $introduction;
    
}