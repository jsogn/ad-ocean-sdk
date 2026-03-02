<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DpaEbpClueProductDeletePostParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型 可选值:
     */
    public string $account_type;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductDeletePostParamStoreIdAndOuterIdData $store_id_and_outer_id 电商店铺商品（category_id为140000000时）支持按照店铺id+外部商品id删除，其他类目商品不需要传
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductDeletePostParamStoreIdAndOuterIdData $store_id_and_outer_id;

    /**
     * @var array<int> $product_ids 通过商品ID删除
     */
    public array $product_ids;

}