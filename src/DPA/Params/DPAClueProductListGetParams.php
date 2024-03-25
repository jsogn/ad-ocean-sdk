<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DPAClueProductListGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\DPA\Data\DPAClueProductListGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\DPA\Data\DPAClueProductListGetParamFilteringData $filtering;
    
    /**
     * @var int $page 分页参数
     */
    public int $page;
    
    /**
     * @var int $page_size 分页参数
     */
    public int $page_size;
    
}