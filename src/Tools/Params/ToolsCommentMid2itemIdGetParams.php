<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsCommentMid2itemIdGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $start_time 查询起始时间，格式：yyyy-MM-dd，时间跨度最大三个月，仅支持获取2021-01-01之后的评论
     */
    public string $start_time;
    
    /**
     * @var string $end_time 查询截止时间，格式：yyyy-MM-dd，时间跨度最大三个月，仅支持获取2021-01-01之后的评论
     */
    public string $end_time;
    
    /**
     * @var int $material_id 素材ID
     */
    public int $material_id;
    
    /**
     * @var int $page 页码，默认值1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认值10，最大值100
     */
    public int $page_size;
    
}