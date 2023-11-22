<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 预算组信息
class BudgetGroupListGetResponseBudgetGroupsData extends Data
{

    /**
     * @var int $budget_group_id 预算组ID
     */
    public int $budget_group_id;
    
    /**
     * @var string $budget_group_name 预算组名称
     */
    public string $budget_group_name;
    
    /**
     * @var double $budget_group_budget 预算组预算
     */
    public double $budget_group_budget;
    
    /**
     * @var string $ad_type 广告类型 可选值:
     */
    public string $ad_type;
    
    /**
     * @var string $delivery_type 投放类型 可选值:
     */
    public string $delivery_type;
    
    /**
     * @var string $budget_group_status_first 一级状态 可选值:
     */
    public string $budget_group_status_first;
    
    /**
     * @var array<string> $budget_group_status_second 二级状态
     */
    public array $budget_group_status_second;
    
    /**
     * @var int $num_projects 关联的（非删除）项目个数
     */
    public int $num_projects;
    
    /**
     * @var double $cost 预算组消耗（元）
     */
    public double $cost;
    
}