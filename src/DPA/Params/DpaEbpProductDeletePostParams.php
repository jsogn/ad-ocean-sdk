<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DpaEbpProductDeletePostParams extends RequestParams
{

    /**
     * @var int $account_id 账户id，需传入商品归属的升级版组织id
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，可选值:
     */
    public string $account_type;

    /**
     * @var int $platform_id 商品库id
     */
    public int $platform_id;

    /**
     * @var int $product_id 商品id
     */
    public int $product_id;

}