<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class AudiencePackageGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Tools\Data\AudiencePackageGetParamFilteringData $filtering 过滤字段
     */
    public \AdOceanSdk\Tools\Data\AudiencePackageGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页码默认值:1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面数据量默认值:10，取值范围1～100
     */
    public int $page_size;
    
}