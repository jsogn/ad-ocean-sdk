<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsKeyActionGetParams extends RequestParams
{

    /**
     * @var array<int> $advertiser_ids 广告主ids
     */
    public array $advertiser_ids;
    
    /**
     * @var string $start_time 查询起始时间，格式：yyyy-MM-dd，若不填，默认6天前（即获取最近七天的内容）
     */
    public string $start_time;
    
    /**
     * @var string $end_time 查询截止时间，格式：yyyy-MM-dd，若不填，默认当天
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