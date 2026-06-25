<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 关联产品投放相关参数
class UniProjectListGetResponseListRelatedProductData extends Data
{

    /**
     * @var int $product_platform_id 商品库ID
     */
    public int $product_platform_id;

    /**
     * @var string $product_id 商品id
     */
    public string $product_id;

}