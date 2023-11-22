<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Params;

use AdOceanSdk\RequestParams;

class AsyncTaskDownloadGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var int $task_id 任务 id
     */
    public int $task_id;
    
    /**
     * @var int $range_from 分片下载开始位置（从 0 开始）。闭区间。缺省表示从第一个字节开始下载。
     */
    public int $range_from;
    
    /**
     * @var int $range_to 分片下载结束位置。闭区间。缺省表示下载到最后一个字节。特别的， -1 表示到最后一个字节。
     */
    public int $range_to;
    
}