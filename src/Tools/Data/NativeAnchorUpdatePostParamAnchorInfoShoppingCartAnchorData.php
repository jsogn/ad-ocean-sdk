<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 购物车锚点，当anchor_type=SHOPPING_CART：购物锚点时必填
class NativeAnchorUpdatePostParamAnchorInfoShoppingCartAnchorData extends Data
{

    /**
     * @var string $title 购物车小标题，不超过10个字
     */
    public string $title;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoShoppingCartAnchorProductImagesData> $product_images 商品图片，比例1:1，至少1张
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoShoppingCartAnchorProductImagesData::class)]
    public array $product_images;
    
    /**
     * @var float $product_price 商品价格，最多两位小数
     */
    public float $product_price;
    
    /**
     * @var string $product_title 商品标题，不超过35个字
     */
    public string $product_title;
    
    /**
     * @var string $product_source 商品来源，只支持填写淘宝/天猫/京东/拼多多/唯品会/得物
     */
    public string $product_source;
    
    /**
     * @var string $external_url 落地页链接
     */
    public string $external_url;
    
    /**
     * @var string $open_url 直达链接
     */
    public string $open_url;
    
    /**
     * @var string $link_type 跳转类型，枚举值一跳：ONE_JUMP、二跳：TWO_JUMP 可选值:
     */
    public string $link_type;
    
}