<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品详情，包括商品库基础字段、落地页、品牌、商户、价格以及其他字段信息，以下所有字段均包含在该结构体下，且不同类型商品库填入字段存在差异，具体格式见下方字段详情
class DpaEbpProductUpdatePostParamProductInfoData extends Data
{

    /**
     * @var string $name 
     */
    public string $name;

    /**
     * @var string $title 
     */
    public string $title;

    /**
     * @var array<string> $titles 
     */
    public array $titles;

    /**
     * @var string $outer_id 
     */
    public string $outer_id;

    /**
     * @var string $description 
     */
    public string $description;

    /**
     * @var int $stock 可选值: 0 1
     */
    public int $stock;

    /**
     * @var int $status 可选值: 0 1
     */
    public int $status;

    /**
     * @var int $online_time 
     */
    public int $online_time;

    /**
     * @var int $offline_time 
     */
    public int $offline_time;

    /**
     * @var string $image_url 
     */
    public string $image_url;

    /**
     * @var array<\AdOceanSdk\DPA\Data\DpaEbpProductUpdatePostParamProductInfoVideosData> $videos 
     */
    public array $videos;

    /**
     * @var array<string> $image_urls 
     */
    public array $image_urls;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductUpdatePostParamProductInfoBrandInfoData $brand_info 
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductUpdatePostParamProductInfoBrandInfoData $brand_info;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductUpdatePostParamProductInfoShopKeeperInfoData $shop_keeper_info 
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductUpdatePostParamProductInfoShopKeeperInfoData $shop_keeper_info;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductUpdatePostParamProductInfoLandingInfoData $landing_info 
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductUpdatePostParamProductInfoLandingInfoData $landing_info;

    /**
     * @var string $first_category 
     */
    public string $first_category;

    /**
     * @var string $sub_category 
     */
    public string $sub_category;

    /**
     * @var string $third_category 
     */
    public string $third_category;

    /**
     * @var string $first_category_id 
     */
    public string $first_category_id;

    /**
     * @var string $sub_category_id 
     */
    public string $sub_category_id;

    /**
     * @var string $third_category_id 
     */
    public string $third_category_id;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductUpdatePostParamProductInfoPriceInfoData $price_info 
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductUpdatePostParamProductInfoPriceInfoData $price_info;

    /**
     * @var string $feature 
     */
    public string $feature;

    /**
     * @var float $mark 
     */
    public float $mark;

    /**
     * @var int $bought 
     */
    public int $bought;

    /**
     * @var int $comments 
     */
    public int $comments;

    /**
     * @var array<string> $tags 
     */
    public array $tags;

    /**
     * @var array<string> $label 
     */
    public array $label;

    /**
     * @var string $spu_id 
     */
    public string $spu_id;

    /**
     * @var string $spu_source 可选值: YUNTU_SPU 云图spuOUTER_PLATFORM_SPU 外部平台spuWITHOUT_SPU 无spuID
     */
    public string $spu_source;

    /**
     * @var string $video 
     */
    public string $video;

    /**
     * @var array<string> $province 
     */
    public array $province;

    /**
     * @var array<string> $city 
     */
    public array $city;

    /**
     * @var array<int> $age 
     */
    public array $age;

    /**
     * @var array $profession 
     */
    public array $profession;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductUpdatePostParamProductInfoGeoData $geo 
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductUpdatePostParamProductInfoGeoData $geo;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductUpdatePostParamProductInfoGeoTargetData $geo_target 
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductUpdatePostParamProductInfoGeoTargetData $geo_target;

}