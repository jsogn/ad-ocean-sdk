<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DpaEbpProductDetailGetGetParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，可选值：
     */
    public string $account_type;

    /**
     * @var int $platform_id 通用版商品库ID，可通过获取商品库列表接口获取
     */
    public int $platform_id;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductDetailGetGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductDetailGetGetParamFilteringData $filtering;

    /**
     * @var int $page 页码，默认值:1
     */
    public int $page;

    /**
     * @var int $page_size 页面大小，默认值:10，最大100
     */
    public int $page_size;

}