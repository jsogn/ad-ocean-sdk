<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsAssetLinkListGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsAssetLinkListGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\Tools\Data\ToolsAssetLinkListGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页码，默认值为1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认值为10，最大值100
     */
    public int $page_size;
    
}