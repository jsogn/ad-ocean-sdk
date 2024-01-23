<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 网服下载锚点，当anchor_type=APP_INTERNET_SERVICE时的详情
class NativeAnchorDetailGetResponseListNetServiceAnchorData extends Data
{

    /**
     * @var int $platform_type APP下载配置，net_service_type为GENERAL常规应用下载时需要填入
     */
    public int $platform_type;
    
    /**
     * @var string $android_download_url 安卓下载链接，net_service_type为GENERAL常规应用下载时需要填入
     */
    public string $android_download_url;
    
    /**
     * @var string $android_anchor_title 安卓锚点标题，请输入与安卓端应用名称相关的引导文案
     */
    public string $android_anchor_title;
    
    /**
     * @var string $ios_download_url iOS下载链接，net_service_type为GENERAL常规应用下载时需要填入
     */
    public string $ios_download_url;
    
    /**
     * @var string $ios_anchor_title iOS 锚点标题，请输入与iOS端应用名称相关的引导文案
     */
    public string $ios_anchor_title;
    
    /**
     * @var string $app_open_url app调起链接
     */
    public string $app_open_url;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListNetServiceAnchorHeadImageListData> $head_image_list 锚点头部图片list，推荐尺寸为2：1的横图
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListNetServiceAnchorHeadImageListData::class)]
    public array $head_image_list;
    
    /**
     * @var array<string> $app_tags APP标签列表，每个标签长度：1～4；标签个数：1～3
     */
    public array $app_tags;
    
    /**
     * @var string $guide_text 引导文案，长度：1～15
     */
    public string $guide_text;
    
    /**
     * @var int $anchor_image_mode APP图片比例，
     */
    public int $anchor_image_mode;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListNetServiceAnchorAppImagesData> $app_images APP图片，图片个数 3～8
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListNetServiceAnchorAppImagesData::class)]
    public array $app_images;
    
    /**
     * @var string $app_description APP详情，1～100
     */
    public string $app_description;
    
    /**
     * @var string $net_service_type 
     */
    public string $net_service_type;
    
    /**
     * @var int $instance_id 微信小程序ID，锚点类型为网服且net_service_type为MICRO_APP必填
     */
    public int $instance_id;
    
    /**
     * @var string $path_param 微信小程序/快应用路径参数，如有跳转指定页面，需填写
     */
    public string $path_param;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListNetServiceAnchorIconImagesData> $icon_images 应用icon图，网服锚点类型且net_service_type为MICRO_APP 必填
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListNetServiceAnchorIconImagesData::class)]
    public array $icon_images;
    
    /**
     * @var int $quick_app_id 快应用ID，网服锚点类型且net_service_type为QUICK_APP必填
     */
    public int $quick_app_id;
    
    /**
     * @var string $novel_chapter 小说章节，非必填，填写小说章节预览，字数1~9999
     */
    public string $novel_chapter;
    
    /**
     * @var int $wechat_package_id net_service_type为WECHAT_PACKAGE时，该参数代表微信号码包ID
     */
    public int $wechat_package_id;
    
}