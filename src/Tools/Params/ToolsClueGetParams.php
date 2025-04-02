<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsClueGetParams extends RequestParams
{

    /**
     * @var array $advertiser_ids 广告主ids，上限：100
     */
    public array $advertiser_ids;
    
    /**
     * @var string $start_time 查询起始时间，格式：yyyy-MM-dd 或者 yyyy-MM-dd hh:mm:ss
     */
    public string $start_time;
    
    /**
     * @var string $end_time 查询截止时间，格式：yyyy-MM-dd 或者 yyyy-MM-dd hh:mm:ss
     */
    public string $end_time;
    
    /**
     * @var int $page 页数 默认值: 1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小 默认值: 10
     */
    public int $page_size;
    
}