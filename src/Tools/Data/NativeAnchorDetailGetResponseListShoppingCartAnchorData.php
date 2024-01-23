<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 购物车锚点，当anchor_type=SHOPPING_CART：购物锚点时返回的详情
class NativeAnchorDetailGetResponseListShoppingCartAnchorData extends Data
{

    /**
     * @var string $title 必填，购物车小标题，不超过10个字
     */
    public string $title;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListShoppingCartAnchorProductImagesData> $product_images 必填，商品图片，比例1:1，至少1张
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListShoppingCartAnchorProductImagesData::class)]
    public array $product_images;
    
    /**
     * @var float $product_price 必填，商品价格，最多两位小数，单位为元
     */
    public float $product_price;
    
    /**
     * @var string $product_title 必填，商品标题，不超过35个字
     */
    public string $product_title;
    
    /**
     * @var string $product_source 必填，商品来源，只支持填写淘宝/天猫/京东/拼多多/唯品会/得物
     */
    public string $product_source;
    
    /**
     * @var string $external_url 必填，落地页链接
     */
    public string $external_url;
    
    /**
     * @var string $open_url 直达链接，选填
     */
    public string $open_url;
    
    /**
     * @var string $link_type 可选值:
     */
    public string $link_type;
    
}