<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DpaEbpClueProductGetGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\DPA\Data\DpaEbpClueProductGetGetResponseProductsData> $products 商品信息
     */
    public array $products;

}