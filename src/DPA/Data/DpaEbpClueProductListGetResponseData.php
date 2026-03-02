<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DpaEbpClueProductListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsData> $products 商品信息
     */
    public array $products;

    /**
     * @var int $total 总数
     */
    public int $total;

}