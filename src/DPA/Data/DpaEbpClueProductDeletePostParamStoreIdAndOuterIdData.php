<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 电商店铺商品（category_id为140000000时）支持按照店铺id+外部商品id删除，其他类目商品不需要传
class DpaEbpClueProductDeletePostParamStoreIdAndOuterIdData extends Data
{

    /**
     * @var string $store_id 店铺ID，传入时必须与商品外部ID同时传入
     */
    public string $store_id;

    /**
     * @var string $outer_id 商品外部ID
     */
    public string $outer_id;

}