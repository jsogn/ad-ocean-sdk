<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 关联产品投放相关参数
class ProjectCreatePostParamRelatedProductData extends Data
{

    /**
     * @var string $product_setting 商品库设置允许值：SINGLE启用sDPA、NO_MAP不启用（默认值）
     */
    public string $product_setting;
    
    /**
     * @var int $product_platform_id 商品库ID，当启用商品库时必填，可通过【商品广告-查询商品库】查询，创建后不可修改
     */
    public int $product_platform_id;
    
    /**
     * @var string $product_id 产品ID，当启用商品库时必填，可通过【商品广告-获取商品列表】查询，创建后不可修改
     */
    public string $product_id;
    
    /**
     * @var int $unique_product_id 线索版产品ID，可通过【商品广告-获取线索商品列表】查询获取id（该接口下的product_id就是unique_product_id），创建后不可修改
     */
    public int $unique_product_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectCreatePostParamRelatedProductProductsData> $products 产品ID列表，上限为10，delivery_mode =PROCEDURAL 自动投放模式 且 推广目的landing_type =销售线索 LINK时，products结构体必传
     */
    public array $products;
    
}