<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class EventManagerShareGetParams extends RequestParams
{

    /**
     * @var int $organization_id 纵横组织id
     */
    public int $organization_id;
    
    /**
     * @var int $asset_id 事件管理资产id
     */
    public int $asset_id;
    
    /**
     * @var int $page 页码，默认值为1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认值为10，最大不超过200
     */
    public int $page_size;
    
}