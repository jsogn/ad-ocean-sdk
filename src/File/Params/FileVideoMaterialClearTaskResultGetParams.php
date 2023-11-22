<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileVideoMaterialClearTaskResultGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主id
     */
    public int $advertiser_id ;
    
    /**
     * @var int $clear_id  清理任务id
     */
    public int $clear_id ;
    
    /**
     * @var int $page 页码，默认1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认10，最大100
     */
    public int $page_size;
    
}