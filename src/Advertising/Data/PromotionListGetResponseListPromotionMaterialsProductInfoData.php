<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 产品信息
class PromotionListGetResponseListPromotionMaterialsProductInfoData extends Data
{

    /**
     * @var array<string> $titles 产品名称
     */
    public array $titles;
    
    /**
     * @var array<string> $image_ids 产品主图
     */
    public array $image_ids;
    
    /**
     * @var array<string> $selling_points 产品卖点
     */
    public array $selling_points;
    
    /**
     * @var string $product_name_type 产品名称类型，枚举值：DPA产品库字段，CUSTOM自定义
     */
    public string $product_name_type;
    
    /**
     * @var string $product_image_type 产品图片类型，枚举值：DPA产品库字段，CUSTOM自定义
     */
    public string $product_image_type;
    
    /**
     * @var string $product_selling_point_type 产品卖点类型，枚举值：DPA产品库字段，CUSTOM自定义
     */
    public string $product_selling_point_type;
    
    /**
     * @var array<string> $product_name_fields DPA产品库名称字段
     */
    public array $product_name_fields;
    
    /**
     * @var array<string> $product_image_fields DPA产品库图片字段
     */
    public array $product_image_fields;
    
    /**
     * @var array<string> $product_selling_point_fields DPA产品库卖点字段
     */
    public array $product_selling_point_fields;
    
}