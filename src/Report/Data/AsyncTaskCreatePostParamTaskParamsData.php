<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 任务的参数。
class AsyncTaskCreatePostParamTaskParamsData extends Data
{

    /**
     * @var string $start_date 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期。
     */
    public string $start_date;
    
    /**
     * @var string $end_date 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期。如果分组条件中不包括时间类型，那么时间区间不能超过一年 366 天。如果分组条件包含STAT_GROUP_BY_TIME_MONTH，那么时间区间不能超过一年 366 天。如果分组条件包含STAT_GROUP_BY_TIME_WEEK，那么时间区间不能超过三个月 93 天。如果分组条件包括STAT_GROUP_BY_TIME_DAY，那么时间区间不能超过一个月 31 天。
     */
    public string $end_date;
    
    /**
     * @var array<string> $group_by 分组条件，【附录：分组条件】假设一次查询中共有m个campaign_id，n天数据，有以下三种情况：①group_by=["STAT_GROUP_BY_TIME_DAY"]表示数据按照天粒度聚合，即本次返回最多为n个数据，表示将m个campaign_id的数据按天各自累计。②group_by=["STAT_GROUP_BY_CAMPAIGN_ID"]表示按照campaign_id聚合，本次返回最多返回m条数据，即按照m个campaign_id各自累加.③group_by=["STAT_GROUP_BY_CAMPAIGN_ID", "STAT_GROUP_BY_TIME_DAY"]表示按照时间和id同时聚合，最多返回m * n个数据，返回数据中会同时存在id和时间。同理如果group_by=["STAT_GROUP_BY_TIME_DAY", "STAT_GROUP_BY_CAMPAIGN_ID","STAT_GROUP_BY_INVENTORY"]表示按照天、广告组id和广告位（或者其他细分维度）同时聚合。
     */
    public array $group_by;
    
    /**
     * @var string $order_field 排序字段，所有的统计指标均可参与排序
     */
    public string $order_field;
    
    /**
     * @var string $order_type 排序方式默认值:DESC允许值:"ASC","DESC"
     */
    public string $order_type;
    
    /**
     * @var array<string> $fields 指定需要的消耗相关指标名称。注意：1.如果没有指定，那么只返回支持的默认指标名称；2. 对于不同的分组条件，支持不同的指标；具体说明可以参考：异步任务报表支持指标目前还不支持返回如下字段："attribution_convert_cost","attribution_deep_convert_cost","attribution_next_day_open_cnt","attribution_next_day_open_cost","attribution_next_day_open_rate"
     */
    public array $fields;
    
    /**
     * @var \AdOceanSdk\Report\Data\AsyncTaskCreatePostParamTaskParamsFilteringData $filtering 过滤字段
     */
    public \AdOceanSdk\Report\Data\AsyncTaskCreatePostParamTaskParamsFilteringData $filtering;
    
}