<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Params;

use AdOceanSdk\RequestParams;

class EbpAdvertiserListGetParams extends RequestParams
{

    /**
     * @var int $enterprise_organization_id 旧版巨量引擎工作台ID
     */
    public int $enterprise_organization_id;

    /**
     * @var string $account_source 账户类型，允许值：
     */
    public string $account_source;

    /**
     * @var \AdOceanSdk\EBP\Data\EbpAdvertiserListGetParamFilteringData $filtering 过滤器
     */
    public \AdOceanSdk\EBP\Data\EbpAdvertiserListGetParamFilteringData $filtering;

    /**
     * @var int $page 页码，默认1
     */
    public int $page;

    /**
     * @var int $page_size 页面大小，[1,100]，默认10
     */
    public int $page_size;

}