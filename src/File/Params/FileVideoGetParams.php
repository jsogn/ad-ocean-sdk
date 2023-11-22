<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileVideoGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\File\Data\FileVideoGetParamFilteringData $filtering 视频过滤条件
     */
    public \AdOceanSdk\File\Data\FileVideoGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页码，默认值1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认值20
     */
    public int $page_size;
    
}