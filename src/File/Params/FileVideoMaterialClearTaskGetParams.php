<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileVideoMaterialClearTaskGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主id
     */
    public int $advertiser_id ;
    
    /**
     * @var array<int> $clear_ids 清理任务id列表，最多支持10个
     */
    public array $clear_ids;
    
    /**
     * @var int $page 页码，默认：1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认10，范围：1-100
     */
    public int $page_size;
    
}