<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Params;

use AdOceanSdk\RequestParams;

class ReportIntergratedGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var string $start_date 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期
     */
    public string $start_date;
    
    /**
     * @var string $end_date 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期- 对于搜索词报表，只支持查看最近 30 天的数据;- 对于关键词报表，只支持查看 2019-05-19 之后的数据- 对于所有报表，时间跨度不得超过30天
     */
    public string $end_date;
    
    /**
     * @var array<string> $group_by 分组条件，分组规则详见【分组组合规则说明】至少需要提供一个分组条件，但每类分组条件同时只能存在一个，如果在条件中同时包含了多个同一类的分组条件，则会报错；
     */
    public array $group_by;
    
    /**
     * @var array<string> $fields 指定需要的指标名称。如果选择了该字段，请至少提供一个指标；注意：1.如果没有指定，那么只返回支持的默认指标名称（参见文档下方说明）；2.对于不同的分组条件，支持不同的指标（参见文档下方说明）
     */
    public array $fields;
    
    /**
     * @var \AdOceanSdk\Report\Data\ReportIntergratedGetParamFilteringData $filtering 过滤字段，json格式，如果campaign_ids不填默认按照广告主过滤，支持字段如下
     */
    public \AdOceanSdk\Report\Data\ReportIntergratedGetParamFilteringData $filtering;
    
    /**
     * @var \AdOceanSdk\Report\Data\ReportIntergratedGetParamPostFilteringData $post_filtering 后置过滤条件，即聚合之后进行过滤。类似于 sql 语法中的 having
     */
    public \AdOceanSdk\Report\Data\ReportIntergratedGetParamPostFilteringData $post_filtering;
    
    /**
     * @var string $order_field 排序字段，所有的统计指标均可参与排序
     */
    public string $order_field;
    
    /**
     * @var string $order_type 排序方式,默认值: DESC,允许值: "ASC", "DESC"
     */
    public string $order_type;
    
    /**
     * @var int $page 页码；有效值为正整数；默认值: 1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，即每页展示的数据量；默认值: 20；取值范围: 1-1000
     */
    public int $page_size;
    
}