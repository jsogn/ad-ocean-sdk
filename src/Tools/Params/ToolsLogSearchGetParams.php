<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsLogSearchGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $object_id 操作对象ID, 1 <= len <= 20 , 可以为campaign_id、ad_id、creative_id， 各种id可以随意组合
     */
    public array $object_id;
    
    /**
     * @var string $start_time 日志查询开始时间，格式 "2019-07-24 21:46:57"
     */
    public string $start_time;
    
    /**
     * @var string $end_time 日志查询结束时间，格式 "2019-07-24 21:46:57"
     */
    public string $end_time;
    
    /**
     * @var int $page 页码默认值:1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小默认值:10允许值:1~20
     */
    public int $page_size;
    
}