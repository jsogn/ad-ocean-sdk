<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 产品ID列表
class ProjectListGetResponseListRelatedProductProductsData extends Data
{

    /**
     * @var string $product_id 产品ID
     */
    public string $product_id;
    
    /**
     * @var int $product_platform_id 产品库ID
     */
    public int $product_platform_id;
    
    /**
     * @var int $unique_product_id 线索版产品ID，此ID也是【商品广告-获取线索商品列表】获取到的product_id
     */
    public int $unique_product_id;
    
    /**
     * @var int $asset_id 物件ID
     */
    public int $asset_id;
    
}