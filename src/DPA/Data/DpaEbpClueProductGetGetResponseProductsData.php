<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品信息
class DpaEbpClueProductGetGetResponseProductsData extends Data
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
     * @var string $outer_id 自定义商品ID（电商店铺商品会返回）
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
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductGetGetResponseProductsCategoryData $category 商品类目信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductGetGetResponseProductsCategoryData $category;

    /**
     * @var string $image_url 商品头图url
     */
    public string $image_url;

    /**
     * @var array<\AdOceanSdk\DPA\Data\DpaEbpClueProductGetGetResponseProductsImagesUrlData> $images_url 商品组图
     */
    public array $images_url;

    /**
     * @var array<\AdOceanSdk\DPA\Data\DpaEbpClueProductGetGetResponseProductsVideosData> $videos 商品视频列表
     */
    public array $videos;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductGetGetResponseProductsBrandInfoData $brand_info 品牌信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductGetGetResponseProductsBrandInfoData $brand_info;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductGetGetResponseProductsShopKeeperInfoData $shop_keeper_info 商家信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductGetGetResponseProductsShopKeeperInfoData $shop_keeper_info;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductGetGetResponseProductsLandingInfoData $landing_info 落地页信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductGetGetResponseProductsLandingInfoData $landing_info;

    /**
     * @var string $status 商品状态，枚举值：STATUS_OFFLINE 线下不可投放状态STATUS_ONLINE 线上可投放状态
     */
    public string $status;

    /**
     * @var string $audit_status 审核状态，枚举值：AUDIT_STATUS_APPROVE 审核通过AUDIT_STATUS_INIT 审核中AUDIT_STATUS_REJECT 审核未通过
     */
    public string $audit_status;

    /**
     * @var string $completion_status 字段填充状态，枚举值：AD_COMPLETED 营销场景已完善ALL_COMPLETED 必填字段已完善LEADS_COMPLETED 经营场景（企业号）已完善TO_BE_COMPLETED 必填字段待完善
     */
    public string $completion_status;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductGetGetResponseProductsPriceInfoData $price_info 价格信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductGetGetResponseProductsPriceInfoData $price_info;

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
     * @var bool $has_video 是否存在视频
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
     * @var array $profession 行业特定字段
     */
    public array $profession;

}