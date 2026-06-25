<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 关联产品投放相关参数
class UniProjectCreatePostParamRelatedProductData extends Data
{

    /**
     * @var int $product_platform_id 当营销产品=剧目时，有效且必填商品库ID，可通过【商品投放-查询商品库】查询。
     */
    public int $product_platform_id;

    /**
     * @var int $product_id 商品id，可通过【商品投放-获取商品列表】查询。当营销产品=剧目时，有效且必填，单次请求最多支持传入一个商品id
     */
    public int $product_id;

}