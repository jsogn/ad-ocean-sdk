<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品信息
class DpaEbpClueProductListGetResponseProductsData extends Data
{

    /**
     * @var int $platform_product_id 商品ID
     */
    public int $platform_product_id;

    /**
     * @var int $product_id 商品ID
     */
    public int $product_id;

    /**
     * @var int $account_type 账户类型，固定枚举为EBP（升级版组织）
     */
    public int $account_type;

    /**
     * @var int $account_id 账户id，升级版组织id
     */
    public int $account_id;

    /**
     * @var int $category_id 商品行业类目id
     */
    public int $category_id;

    /**
     * @var string $brand_id 品牌id
     */
    public string $brand_id;

    /**
     * @var int $status 投放状态STATUS_OFFLINE 不可投放状态STATUS_ONLINE 可投放状态
     */
    public int $status;

    /**
     * @var int $audit_status 审核状态AUDIT_STATUS_APPROVE 审核通过AUDIT_STATUS_INIT 审核中AUDIT_STATUS_REJECT 审核未通过
     */
    public int $audit_status;

    /**
     * @var int $type 商品类型，0:旧商品，1:新商品
     */
    public int $type;

    /**
     * @var int $completion_status 商品字段填充状态（商品是否有必填字段未完善）
     */
    public int $completion_status;

    /**
     * @var string $name 商品名称
     */
    public string $name;

    /**
     * @var string $title 商品标题,可包含促销等
     */
    public string $title;

    /**
     * @var string $description 商品描述
     */
    public string $description;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsCategoryData $category 商品类目信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsCategoryData $category;

    /**
     * @var string $image_url 商品头图url
     */
    public string $image_url;

    /**
     * @var array<\AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsImagesUrlData> $images_url 商品组图
     */
    public array $images_url;

    /**
     * @var string $video_url 商品视频链接
     */
    public string $video_url;

    /**
     * @var array<\AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsVideosData> $videos 商品视频列表
     */
    public array $videos;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsBrandInfoData $brand_info 品牌信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsBrandInfoData $brand_info;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsShopKeeperInfoData $shop_keeper_info 商家信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsShopKeeperInfoData $shop_keeper_info;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsLandingInfoData $landing_info 落地页信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsLandingInfoData $landing_info;

    /**
     * @var array<string> $tags 商品标签
     */
    public array $tags;

    /**
     * @var string $feature 特点
     */
    public string $feature;

    /**
     * @var int $online_time 上线时间;单位秒
     */
    public int $online_time;

    /**
     * @var int $offline_time 下线时间;单位秒
     */
    public int $offline_time;

    /**
     * @var int $stock 库存状态
     */
    public int $stock;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsPriceInfoData $price_info 价格信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsPriceInfoData $price_info;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsProductHisEvalData $product_his_eval 历史销量/评价
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsProductHisEvalData $product_his_eval;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsDeliveryData $delivery 
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsDeliveryData $delivery;

    /**
     * @var array $profession 行业个性信息，json内容参见文档
     */
    public array $profession;

    /**
     * @var string $ext 
     */
    public string $ext;

    /**
     * @var string $outer_id 自定义商品ID
     */
    public string $outer_id;

    /**
     * @var int $has_video true：存在
     */
    public int $has_video;

    /**
     * @var string $spu_id 商品spuID
     */
    public string $spu_id;

    /**
     * @var string $poi_id poiID
     */
    public string $poi_id;

    /**
     * @var array<string> $label 商品标签，历史的标签信息
     */
    public array $label;

    /**
     * @var string $reason 审核失败原因
     */
    public string $reason;

    /**
     * @var int $version 版本号
     */
    public int $version;

    /**
     * @var string $create_time 商品创建时间
     */
    public string $create_time;

    /**
     * @var string $modify_time 商品最新一次修改时间
     */
    public string $modify_time;

    /**
     * @var int $online_status 线上投放状态
     */
    public int $online_status;

    /**
     * @var int $dpa_id for ad创编关联 pId+dpaId+ppId
     */
    public int $dpa_id;

    /**
     * @var int $history_account_type EBP资产历史所属账户类型
     */
    public int $history_account_type;

    /**
     * @var int $history_account_id EBP资产历史所属账户ID
     */
    public int $history_account_id;

    /**
     * @var int $source_account_type EBP资产写入来源账户类型
     */
    public int $source_account_type;

    /**
     * @var int $source_account_id EBP资产写入来源账户ID
     */
    public int $source_account_id;

    /**
     * @var array $hot_word 各个字段客户选择的热词
     */
    public array $hot_word;

}