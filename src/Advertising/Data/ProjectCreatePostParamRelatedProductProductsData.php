<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 产品ID列表，上限为10，delivery_mode =PROCEDURAL 自动投放模式 且 推广目的landing_type =销售线索 LINK时，products结构体必传
class ProjectCreatePostParamRelatedProductProductsData extends Data
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
     * @var int $unique_product_id 线索版产品ID，可通过【商品广告-获取线索商品列表】查询获取id（该接口下的product_id就是unique_product_id）
     */
    public int $unique_product_id;
    
    /**
     * @var int $asset_id 物件ID，可通过【商品广告-获取投放条件列表】获取，创建后不可修改。
     */
    public int $asset_id;
    
}