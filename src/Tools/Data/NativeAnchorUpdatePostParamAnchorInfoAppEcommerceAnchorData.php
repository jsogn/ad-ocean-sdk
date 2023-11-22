<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 电商下载锚点，当anchor_type=APP_SHOP: 电商锚点时必填
class NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorData extends Data
{

    /**
     * @var string $ios_anchor_title ios 锚点标题字段，长度：1～12
     */
    public string $ios_anchor_title;
    
    /**
     * @var string $android_anchor_title 安卓锚点标题字段，长度：1～12
     */
    public string $android_anchor_title;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorProductImageData $product_image 商品大图，推荐比例 1：1
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorProductImageData $product_image;
    
    /**
     * @var string $product_name 商品名称，长度1～10
     */
    public string $product_name;
    
    /**
     * @var array<string> $product_tags 商品标签列表，每个标签长度：1～4，标签个数：1～3
     */
    public array $product_tags;
    
    /**
     * @var int $product_price 商品价格（整数，且单位：元）
     */
    public int $product_price;
    
    /**
     * @var string $activity_info 活动信息文案，长度：1～20
     */
    public string $activity_info;
    
    /**
     * @var string $service_info 服务信息文案，长度：1～20
     */
    public string $service_info;
    
    /**
     * @var string $detail_info 详情信息文案，长度：1～20
     */
    public string $detail_info;
    
    /**
     * @var string $app_name APP名称，长度：1～6
     */
    public string $app_name;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorAppIconData $app_icon APP图标，推荐比例1：1
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorAppIconData $app_icon;
    
    /**
     * @var string $download_guide_text APP下载引导文案，仅支持中英文，长度：1～12
     */
    public string $download_guide_text;
    
    /**
     * @var int $external_type 跳转链接类型枚举，
     */
    public int $external_type;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorOrangeSiteInfoData $orange_site_info 橙子建站设置
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorOrangeSiteInfoData $orange_site_info;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorThirdSiteInfoData $third_site_info 第三方链接设置
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorThirdSiteInfoData $third_site_info;
    
    /**
     * @var string $app_open_url 唤起APP链接，请输入APP调起链接
     */
    public string $app_open_url;
    
    /**
     * @var string $android_pkg_name 安卓包名
     */
    public string $android_pkg_name;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorOfficialActiBannerImageData $official_acti_banner_image 官方互动banner图，推荐尺寸1032*360px
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorOfficialActiBannerImageData $official_acti_banner_image;
    
    /**
     * @var string $official_acti_text 官方活动描述详情，长度：1～15
     */
    public string $official_acti_text;
    
}