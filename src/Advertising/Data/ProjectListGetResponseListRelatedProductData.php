<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 关联产品投放相关
class ProjectListGetResponseListRelatedProductData extends Data
{

    /**
     * @var string $product_setting 商品库设置，枚举值：SINGLE启用SDPA、NO_MAP不启用
     */
    public string $product_setting;
    
    /**
     * @var int $product_platform_id 商品库ID
     */
    public int $product_platform_id;
    
    /**
     * @var string $product_id 产品ID
     */
    public string $product_id;
    
    /**
     * @var int $unique_product_id 线索版产品ID，此ID也是【商品广告-获取线索商品列表】获取到的product_id
     */
    public int $unique_product_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectListGetResponseListRelatedProductProductsData> $products 产品ID列表
     */
    public array $products;
    
}