<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品库商品列表
class DpaEbpProductDetailGetGetResponseListData extends Data
{

    /**
     * @var int $platform_id 商品库id
     */
    public int $platform_id;

    /**
     * @var int $product_id 商品id
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
     * @var array<string> $titles 
     */
    public array $titles;

    /**
     * @var string $outer_id 外部商品id
     */
    public string $outer_id;

    /**
     * @var string $description 商品描述
     */
    public string $description;

    /**
     * @var int $stock 商品库存状态
     */
    public int $stock;

    /**
     * @var int $status 商品可投状态，枚举值：
     */
    public int $status;

    /**
     * @var int $audit_status 审核状态，枚举值:
     */
    public int $audit_status;

    /**
     * @var string $audit_reason_text 审核拒绝原因
     */
    public string $audit_reason_text;

    /**
     * @var string $audit_hit_field 审核拒绝字段
     */
    public string $audit_hit_field;

    /**
     * @var int $online_time 上线时间，格式"YYYY-MM-DD"
     */
    public int $online_time;

    /**
     * @var int $offline_time 下线时间，格式"YYYY-MM-DD"
     */
    public int $offline_time;

    /**
     * @var string $image_url 商品封面图片链接
     */
    public string $image_url;

    /**
     * @var array<\AdOceanSdk\DPA\Data\DpaEbpProductDetailGetGetResponseListVideosData> $videos 商品视频列表
     */
    public array $videos;

    /**
     * @var array<\AdOceanSdk\DPA\Data\DpaEbpProductDetailGetGetResponseListImageUrlsData> $image_urls 商品组图
     */
    public array $image_urls;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductDetailGetGetResponseListBrandInfoData $brand_info 品牌信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductDetailGetGetResponseListBrandInfoData $brand_info;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductDetailGetGetResponseListShopKeeperInfoData $shop_keeper_info 商家信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductDetailGetGetResponseListShopKeeperInfoData $shop_keeper_info;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductDetailGetGetResponseListLandingInfoData $landing_info 落地页信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductDetailGetGetResponseListLandingInfoData $landing_info;

    /**
     * @var string $first_category 一级商品行业名称
     */
    public string $first_category;

    /**
     * @var string $sub_category 二级商品行业名称
     */
    public string $sub_category;

    /**
     * @var string $third_category 三级商品行业名称
     */
    public string $third_category;

    /**
     * @var string $first_category_id 一级商品行业 ID
     */
    public string $first_category_id;

    /**
     * @var string $sub_category_id 二级商品行业 ID
     */
    public string $sub_category_id;

    /**
     * @var string $third_category_id 三级商品行业 ID
     */
    public string $third_category_id;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductDetailGetGetResponseListPriceInfoData $price_info 价格信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductDetailGetGetResponseListPriceInfoData $price_info;

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
     * @var int $has_video 当前商品是否有商品视频0：没有，1：有
     */
    public int $has_video;

    /**
     * @var string $spu_source 可选值: YUNTU_SPU 云图spuOUTER_PLATFORM_SPU 外部平台spuWITHOUT_SPU 无spuID
     */
    public string $spu_source;

    /**
     * @var string $spu_id 商品spuID
     */
    public string $spu_id;

    /**
     * @var string $video 商品视频链接
     */
    public string $video;

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