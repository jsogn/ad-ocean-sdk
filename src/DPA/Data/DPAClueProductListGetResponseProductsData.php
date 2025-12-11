<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品信息
class DPAClueProductListGetResponseProductsData extends Data
{

    /**
     * @var int $product_id 商品ID
     */
    public int $product_id;
    
    /**
     * @var string $name 商品名称
     */
    public string $name;
    
    /**
     * @var string $title 商品标题
     */
    public string $title;
    
    /**
     * @var string $outer_id 自定义商品ID
     */
    public string $outer_id;
    
    /**
     * @var string $description 商品描述信息
     */
    public string $description;
    
    /**
     * @var string $online_time 上线时间，精确到秒
     */
    public string $online_time;
    
    /**
     * @var string $offline_time 下线时间，精确到秒
     */
    public string $offline_time;
    
    /**
     * @var \AdOceanSdk\DPA\Data\DPAClueProductListGetResponseProductsCategoryData $category 商品类目信息
     */
    public \AdOceanSdk\DPA\Data\DPAClueProductListGetResponseProductsCategoryData $category;
    
    /**
     * @var string $image_url 商品头图url
     */
    public string $image_url;
    
    /**
     * @var array<\AdOceanSdk\DPA\Data\DPAClueProductListGetResponseProductsImagesUrlData> $images_url 商品组图
     */
    public array $images_url;
    
    /**
     * @var array<\AdOceanSdk\DPA\Data\DPAClueProductListGetResponseProductsVideosData> $videos 商品视频列表
     */
    public array $videos;
    
    /**
     * @var \AdOceanSdk\DPA\Data\DPAClueProductListGetResponseProductsBrandInfoData $brand_info 品牌信息
     */
    public \AdOceanSdk\DPA\Data\DPAClueProductListGetResponseProductsBrandInfoData $brand_info;
    
    /**
     * @var \AdOceanSdk\DPA\Data\DPAClueProductListGetResponseProductsShopKeeperInfoData $shop_keeper_info 商家信息
     */
    public \AdOceanSdk\DPA\Data\DPAClueProductListGetResponseProductsShopKeeperInfoData $shop_keeper_info;
    
    /**
     * @var \AdOceanSdk\DPA\Data\DPAClueProductListGetResponseProductsLandingInfoData $landing_info 落地页信息
     */
    public \AdOceanSdk\DPA\Data\DPAClueProductListGetResponseProductsLandingInfoData $landing_info;
    
    /**
     * @var string $status 商品状态，可选值:
     */
    public string $status;
    
    /**
     * @var string $audit_status 审核状态，可选值:
     */
    public string $audit_status;
    
    /**
     * @var string $completion_status 字段填充状态，可选值:
     */
    public string $completion_status;
    
    /**
     * @var \AdOceanSdk\DPA\Data\DPAClueProductListGetResponseProductsPriceInfoData $price_info 价格信息
     */
    public \AdOceanSdk\DPA\Data\DPAClueProductListGetResponseProductsPriceInfoData $price_info;
    
    /**
     * @var string $feature 特点
     */
    public string $feature;
    
    /**
     * @var float $mark 评分
     */
    public float $mark;
    
    /**
     * @var int $bought 购买量
     */
    public int $bought;
    
    /**
     * @var int $comments 评论数
     */
    public int $comments;
    
    /**
     * @var array<string> $tags 商品标签
     */
    public array $tags;
    
    /**
     * @var array<string> $label 商品标签，历史的标签信息
     */
    public array $label;
    
    /**
     * @var bool $has_video 是否存在视频，可选值：
     */
    public bool $has_video;
    
    /**
     * @var string $spu_id 商品spuID
     */
    public string $spu_id;
    
    /**
     * @var string $poi_id 商品poiID
     */
    public string $poi_id;
    
    /**
     * @var string $video_url 商品视频链接
     */
    public string $video_url;
    
    /**
     * @var array<string> $province 定向省
     */
    public array $province;
    
    /**
     * @var array<string> $city 定向城市
     */
    public array $city;
    
    /**
     * @var array<int> $age 定向年龄
     */
    public array $age;
    
    /**
     * @var dict[string] $profession 行业特定字段
     */
    public dict[string] $profession;
    
}