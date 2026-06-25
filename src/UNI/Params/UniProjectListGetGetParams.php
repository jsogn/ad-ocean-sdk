<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Params;

use AdOceanSdk\RequestParams;

class UniProjectListGetGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 客户id
     */
    public int $advertiser_id;

    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectListGetGetParamFilteringData $filtering 过滤器
     */
    public \AdOceanSdk\UNI\Data\UniProjectListGetGetParamFilteringData $filtering;

    /**
     * @var int $page 页码，默认值：1
     */
    public int $page;

    /**
     * @var int $page_size 页面大小，允许值：10, 20, 50, 100，默认值：10
     */
    public int $page_size;

}