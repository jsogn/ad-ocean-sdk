<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 外跳锚点，当anchor_type=INSURANCE时返回的详情
class NativeAnchorDetailGetResponseListInsuranceEnterpriseAnchorData extends Data
{

    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListInsuranceEnterpriseAnchorProductImageData $product_image 服务主图
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListInsuranceEnterpriseAnchorProductImageData $product_image;
    
    /**
     * @var string $product_title 产品名称，1-15字
     */
    public string $product_title;
    
    /**
     * @var string $detail_url 点击按钮时的跳转链接，此处填写的跳转链接会应用到“转化按钮”与“详情介绍”，以http开头
     */
    public string $detail_url;
    
    /**
     * @var array<string> $product_tags 产品特点，最多返回3个
     */
    public array $product_tags;
    
    /**
     * @var string $product_service_description 服务描述，1-6字
     */
    public string $product_service_description;
    
    /**
     * @var string $conversion_btn 转化按钮，仅支持1个枚举 可选值:
     */
    public string $conversion_btn;
    
    /**
     * @var array<string> $product_descriptions 产品描述
     */
    public array $product_descriptions;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListInsuranceEnterpriseAnchorBannerImageData $banner_image 详情介绍banner,大小不超过10M的图片，尺寸1032*360px
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListInsuranceEnterpriseAnchorBannerImageData $banner_image;
    
    /**
     * @var string $banner_description 详情介绍，1-18个字
     */
    public string $banner_description;
    
    /**
     * @var string $product_name 产品详情下的产品名称
     */
    public string $product_name;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListInsuranceEnterpriseAnchorSingleProductInfoData> $single_product_info 单项服务名称，5-10组
     */
    public array $single_product_info;
    
}