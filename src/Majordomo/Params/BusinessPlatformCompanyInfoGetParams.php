<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Params;

use AdOceanSdk\RequestParams;

class BusinessPlatformCompanyInfoGetParams extends RequestParams
{

    /**
     * @var int $organization_id 纵横组织ID
     */
    public int $organization_id;
    
    /**
     * @var int $page 页码，默认值：1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面数据量，默认值：10
     */
    public int $page_size;
    
}