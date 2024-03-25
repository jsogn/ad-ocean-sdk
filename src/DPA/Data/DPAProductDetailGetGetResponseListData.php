<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品库商品列表
class DPAProductDetailGetGetResponseListData extends Data
{

    /**
     * @var string $name 商品名称
     */
    public string $name;
    
    /**
     * @var string $title 商品标题
     */
    public string $title;
    
    /**
     * @var string $description 商品标题
     */
    public string $description;
    
    /**
     * @var string $offline_time 下线时间，格式"YYYY-MM-DD"
     */
    public string $offline_time;
    
    /**
     * @var string $online_time 上线时间，格式"YYYY-MM-DD"
     */
    public string $online_time;
    
    /**
     * @var int $platform_id 商品库ID
     */
    public int $platform_id;
    
    /**
     * @var int $product_id 商品ID
     */
    public int $product_id;
    
    /**
     * @var string $image_url 商品封面图片链接
     */
    public string $image_url;
    
    /**
     * @var string $city 定向城市
     */
    public string $city;
    
    /**
     * @var string $external_url 落地页链接
     */
    public string $external_url;
    
    /**
     * @var int $first_category 商品所处一级行业 ID
     */
    public int $first_category;
    
    /**
     * @var int $sub_category 商品所处二级行业 ID
     */
    public int $sub_category;
    
    /**
     * @var int $third_category 商品所处三级行业 ID
     */
    public int $third_category;
    
    /**
     * @var string $brand_name 商品名称
     */
    public string $brand_name;
    
    /**
     * @var array<string> $tags 商品标签
     */
    public array $tags;
    
    /**
     * @var int $has_video 当前商品是否有商品视频0：没有，1：有
     */
    public int $has_video;
    
}