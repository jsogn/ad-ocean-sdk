<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品库商品列表
class DPADetailGetGetResponseListData extends Data
{

    /**
     * @var int $platform_id 商品库ID
     */
    public int $platform_id;

    /**
     * @var int $product_id 商品ID
     */
    public int $product_id;

    /**
     * @var string $name 商品名称
     */
    public string $name;

    /**
     * @var string $description 商品描述
     */
    public string $description;

    /**
     * @var string $image_url 商品主图url链接，展示在信息流中的原始素材
     */
    public string $image_url;

    /**
     * @var array<\AdOceanSdk\DPA\Data\DPADetailGetGetResponseListImageUrlsData> $image_urls 扩展商品图，商品图片的补充
     */
    public ?array $image_urls;

    /**
     * @var int $online_time 商品上线时间，格式为十位unix时间戳类型
     */
    public int $online_time;

    /**
     * @var int $offline_time 商品下线时间，格式为十位unix时间戳类型
     */
    public int $offline_time;

    /**
     * @var int $status 商品投放状态，0代表不可投放，1代表可投放
     */
    public int $status;

    /**
     * @var int $stock 商品库存状态，0代表无库存，1代表有库存
     */
    public int $stock;

    /**
     * @var string $first_category 一级分类
     */
    public string $first_category;

    /**
     * @var string $sub_category 二级分类
     */
    public string $sub_category;

    /**
     * @var string $third_category 三级分类
     */
    public string $third_category;

    /**
     * @var string $first_category_id 一级分类ID
     */
    public string $first_category_id;

    /**
     * @var string $sub_category_id 二级分类ID
     */
    public string $sub_category_id;

    /**
     * @var string $third_category_id 三级分类ID
     */
    public string $third_category_id;

    /**
     * @var \AdOceanSdk\DPA\Data\DPADetailGetGetResponseListLandingInfoData $landing_info 落地页信息
     */
    public \AdOceanSdk\DPA\Data\DPADetailGetGetResponseListLandingInfoData $landing_info;

    /**
     * @var \AdOceanSdk\DPA\Data\DPADetailGetGetResponseListBrandInfoData $brand_info 品牌信息
     */
    public \AdOceanSdk\DPA\Data\DPADetailGetGetResponseListBrandInfoData $brand_info;

    /**
     * @var \AdOceanSdk\DPA\Data\DPADetailGetGetResponseListShopKeeperInfoData $shop_keeper_info 商户信息
     */
    public \AdOceanSdk\DPA\Data\DPADetailGetGetResponseListShopKeeperInfoData $shop_keeper_info;

    /**
     * @var \AdOceanSdk\DPA\Data\DPADetailGetGetResponseListPriceInfoData $price_info 价格信息
     */
    public \AdOceanSdk\DPA\Data\DPADetailGetGetResponseListPriceInfoData $price_info;

    /**
     * @var string $outer_id 商品外部id
     */
    public string $outer_id;

    /**
     * @var string $title 商品标题
     */
    public string $title;

    /**
     * @var array<string> $titles 商品标题组，最多9条标题
     */
    public ?array $titles;

    /**
     * @var string $feature 特色信息
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
    public ?array $tags;

    /**
     * @var string $spu_id 商品spu_id
     */
    public string $spu_id;

    /**
     * @var string $video 视频链接url
     */
    public string $video;

    /**
     * @var int $has_video 当前商品是否有商品视频0：没有，1：有
     */
    public int $has_video;

    /**
     * @var array<string> $province 省份，用于定向人群，默认不限，示例：["江苏","浙江"]
     */
    public ?array $province;

    /**
     * @var array<string> $city 城市，用于定向人群，默认不限，示例：["南京","杭州"]
     */
    public ?array $city;

    /**
     * @var array<int> $age 年龄段，用于定向人群，默认不限，数组项允许值如下：1234561代表年龄段<182代表年龄段在18~23之间3代表年龄段在24~30之间4代表年龄段在31~40之间5代表年龄段在41~49之间6代表年龄段>50如：[2,4]代表年龄段在18~23之间或31~40之间
     */
    public ?array $age;

    /**
     * @var array<string> $label 商品标签，小说库特有字段
     */
    public ?array $label;

    /**
     * @var array<\AdOceanSdk\DPA\Data\DPADetailGetGetResponseListVideosData> $videos 视频内容，小说库特有字段
     */
    public ?array $videos;

    /**
     * @var \AdOceanSdk\DPA\Data\DPADetailGetGetResponseListProfessionData $profession 额外信息
     */
    public \AdOceanSdk\DPA\Data\DPADetailGetGetResponseListProfessionData $profession;

}