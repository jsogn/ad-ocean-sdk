<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DPAClueProductDetailGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\DPA\Data\DPAClueProductDetailGetResponseProductsData> $products 商品信息
     */
    public array $products;
    
}