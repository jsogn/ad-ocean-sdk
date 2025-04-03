<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsCommentGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
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
     * @var string $order_field 排序字段，允许值：
     */
    public string $order_field;
    
    /**
     * @var string $order_type 排序类型，允许值：
     */
    public string $order_type;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsCommentGetParamFilteringData $filtering 过滤条件，若此字段不传，或传空则视为无限制条件
     */
    public \AdOceanSdk\Tools\Data\ToolsCommentGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页码，默认值: 1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小
默认值: 10，最大值：100。单次查询仅支持查询10000条以内评论，即page*page_size需要小于10000，否则报错
     */
    public int $page_size;
    
}