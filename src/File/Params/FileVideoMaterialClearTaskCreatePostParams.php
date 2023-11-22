<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileVideoMaterialClearTaskCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主id
     */
    public int $advertiser_id ;
    
    /**
     * @var \AdOceanSdk\File\Data\FileVideoMaterialClearTaskCreatePostParamClearTaskParamsData $clear_task_params  任务参数，若同时填写多项任务的参数，则最终返回各个参数的交集
     */
    public \AdOceanSdk\File\Data\FileVideoMaterialClearTaskCreatePostParamClearTaskParamsData $clear_task_params ;
    
}