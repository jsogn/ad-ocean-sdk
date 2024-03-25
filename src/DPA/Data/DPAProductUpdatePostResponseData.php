<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DPAProductUpdatePostResponseData extends Data
{

    /**
     * @var int $product_id 商品ID
     */
    public int $product_id;
    
}