<?php

declare(strict_types=1);

namespace AdOceanSdk\OcProject\Params;

use AdOceanSdk\RequestParams;

class ProjectRejectReasonGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 客户id
     */
    public int $advertiser_id;

    /**
     * @var int $project_id 项目id
     */
    public int $project_id;

    /**
     * @var int $page 页数默认值：1，page范围为[1,99999]
     */
    public int $page;

    /**
     * @var int $page_size 页面大小默认值：10，page_size范围为[1,100]
     */
    public int $page_size;

}