<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsAwemeAuthListGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsAwemeAuthListGetParamFilteringData $filtering 筛选条件
     */
    public \AdOceanSdk\Tools\Data\ToolsAwemeAuthListGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页码
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小
     */
    public int $page_size;
    
}