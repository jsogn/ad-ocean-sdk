<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class BudgetGroupListGetParamFilteringData extends Data
{

    /**
     * @var array<int> $budget_group_id_list 预算组ID列表，一次最多传入200个ID
     */
    public array $budget_group_id_list;
    
    /**
     * @var string $budget_group_keyword 预算组名称模糊搜索关键字
     */
    public string $budget_group_keyword;
    
    /**
     * @var string $delivery_type 投放类型 可选值:
     */
    public string $delivery_type;
    
    /**
     * @var string $ad_type 广告类型 可选值:
     */
    public string $ad_type;
    
    /**
     * @var string $budget_group_status_first 预算组聚合一级状态 可选值:
     */
    public string $budget_group_status_first;
    
    /**
     * @var string $budget_group_status_second 预算组聚合二级状态 可选值:
     */
    public string $budget_group_status_second;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\BudgetGroupListGetParamFilteringStatisticsTimeData $statistics_time 统计时间范围
     */
    public \AdOceanSdk\Advertising\Data\BudgetGroupListGetParamFilteringStatisticsTimeData $statistics_time;
    
}