<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DpaEbpClueProductSavePostResponseData extends Data
{

    /**
     * @var int $platform_product_id 商品ID
     */
    public int $platform_product_id;

    /**
     * @var string $outer_id 商品外部ID（仅电商店铺商品会返回）
     */
    public string $outer_id;

    /**
     * @var string $store_id 店铺ID（仅电商店铺商品会返回）
     */
    public string $store_id;

}