<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class DpaEbpProductDetailGetGetParamFilteringData extends Data
{

    /**
     * @var string $product_id 商品ID，精准匹配。商品库ID必须与商品ID匹配，否则会报错。最多允许传入100个
     */
    public string $product_id;

}