<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Params;

use AdOceanSdk\RequestParams;

class AsyncTaskGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Report\Data\AsyncTaskGetParamFilteringData $filtering 筛选条件
     */
    public \AdOceanSdk\Report\Data\AsyncTaskGetParamFilteringData $filtering;
    
    /**
     * @var int $page 分搜索页码默认值:1取值范围:≥ 0
     */
    public int $page;
    
    /**
     * @var int $page_size 一页展示的数据数量默认值:1取值范围:1-10
     */
    public int $page_size;
    
}