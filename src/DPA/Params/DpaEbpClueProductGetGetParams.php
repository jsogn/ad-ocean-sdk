<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DpaEbpClueProductGetGetParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，可选值: EBP 升级版巨量引擎工作台
     */
    public string $account_type;

    /**
     * @var array<int> $product_ids 升级版商品id
     */
    public array $product_ids;

}