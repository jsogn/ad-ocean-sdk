<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DpaEbpProductCreatePostResponseData extends Data
{

    /**
     * @var int $product_id 
     */
    public int $product_id;

    /**
     * @var string $warning 
     */
    public string $warning;

}