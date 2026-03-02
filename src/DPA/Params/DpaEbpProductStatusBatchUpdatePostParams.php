<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DpaEbpProductStatusBatchUpdatePostParams extends RequestParams
{

    /**
     * @var int $account_id 账户id，需传入资产归属的升级版组织id
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，可选值:
     */
    public string $account_type;

    /**
     * @var int $platform_id 商品库ID
     */
    public int $platform_id;

    /**
     * @var array<int> $product_ids 商品ID列表
     */
    public array $product_ids;

    /**
     * @var string $opt_status 操作 可选值: ENABLE 开启投放DISABLE 停止投放
     */
    public string $opt_status;

}