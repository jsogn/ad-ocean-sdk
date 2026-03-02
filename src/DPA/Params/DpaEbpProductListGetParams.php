<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DpaEbpProductListGetParams extends RequestParams
{

    /**
     * @var int $account_id 升级版组织id
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，可选值:
     */
    public string $account_type;

    /**
     * @var int $product_platform_id 商品库id，可通过商品库列表接口获得
     */
    public int $product_platform_id;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductListGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductListGetParamFilteringData $filtering;

    /**
     * @var int $page 页码， 默认值:1
     */
    public int $page;

    /**
     * @var int $page_size 页面数据量， 默认值:20，最大100
     */
    public int $page_size;

}