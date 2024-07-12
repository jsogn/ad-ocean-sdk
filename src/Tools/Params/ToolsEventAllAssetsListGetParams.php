<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEventAllAssetsListGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEventAllAssetsListGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\Tools\Data\ToolsEventAllAssetsListGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页数，默认值`1`，最大值`999999`
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认值`10`，最大`100`
     */
    public int $page_size;
    
}