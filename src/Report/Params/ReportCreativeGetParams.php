<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Params;

use AdOceanSdk\RequestParams;

class ReportCreativeGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $start_date 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期
     */
    public string $start_date;
    
    /**
     * @var string $end_date 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期，时间跨度不能超过30天
     */
    public string $end_date;
    
    /**
     * @var array<string> $fields 指定需要的指标名称，可参考应答参数返回的消耗指标字段默认值：cost、show、avg_show_cost、click、ctr、avg_click_cost、convert、convert_rate、convert_cost
     */
    public array $fields;
    
    /**
     * @var array<string> $group_by 分组条件默认为STAT_GROUP_BY_FIELD_STAT_TIME。支持多种分组条件，具体详见【分组组合规则】
     */
    public array $group_by;
    
    /**
     * @var string $time_granularity 时间粒度默认值:STAT_TIME_GRANULARITY_DAILY允许值:STAT_TIME_GRANULARITY_DAILY(按天维度),STAT_TIME_GRANULARITY_HOURLY(按小时维度)
     */
    public string $time_granularity;
    
    /**
     * @var object $filtering 过滤字段，json格式，支持字段如下
     */
    public object $filtering;
    
    /**
     * @var array $campaign_ids 广告组id列表：按照campaign_id过滤，最多支持100个
     */
    public array $campaign_ids;
    
    /**
     * @var array<int> $ad_ids 广告计划id列表：按照 ad_id 过滤，最多支持100个
     */
    public array $ad_ids;
    
    /**
     * @var array<int> $creative_ids 广告创意id列表：按照 creative_id 过滤，最多支持100个
     */
    public array $creative_ids;
    
    /**
     * @var array<string> $inventory_types 广告位置列表：按照广告位置过滤，详见【附录-首选投放位置】
     */
    public array $inventory_types;
    
    /**
     * @var array<string> $pricings 出价方式列表：按照出价方式过滤，详见【附录-计划出价类型】
     */
    public array $pricings;
    
    /**
     * @var array<string> $image_modes 素材类型列表：按照类型过滤，详见【附录-素材类型】
     */
    public array $image_modes;
    
    /**
     * @var array<string> $creative_material_modes 创意类型列表：按照创意类型过滤，STATIC_ASSEMBLE 表示程序化创意，INTERVENE表示自定义创意。
     */
    public array $creative_material_modes;
    
    /**
     * @var array<string> $landing_types 推广目的列表：按照广告组推广目的过滤,详见【附录-推广目的类型】允许值:"LINK","APP","DPA","GOODS","STORE","SHOP","AWEME"
     */
    public array $landing_types;
    
    /**
     * @var string $status 广告创意状态：按照广告创意状态过滤，详见【附录-创意状态】
     */
    public string $status;
    
    /**
     * @var array<string> $delivery_mode 投放模式筛选。允许值:STANDARD:标准投放。ADLAB_FREE:管家&省心投放
     */
    public array $delivery_mode;
    
    /**
     * @var string $order_field 排序字段，所有的统计指标均可参与排序
     */
    public string $order_field;
    
    /**
     * @var string $order_type 排序方式；默认值:DESC；允许值:ASC,DESC
     */
    public string $order_type;
    
    /**
     * @var int $page 页码；默认值: 1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，即每页展示的数据量；默认值: 20；取值范围: 1-1000
     */
    public int $page_size;
    
}