<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 投放设置
class ProjectListGetResponseListDeliverySettingData extends Data
{

    /**
     * @var string $filter_night_switch 过滤夜间投放
     */
    public string $filter_night_switch;
    
    /**
     * @var string $project_custom 项目成本稳投
     */
    public string $project_custom;
    
    /**
     * @var float $bid 点击出价/展示出价
     */
    public float $bid;
    
    /**
     * @var float $cpa_bid 目标转化出价/预期成本， 取值范围：0.1-10000元
     */
    public float $cpa_bid;
    
    /**
     * @var float $deep_cpabid 深度优化出价
     */
    public float $deep_cpabid;
    
    /**
     * @var float $roi_goal 深度转化ROI系数, 范围(0,5]，精度：保留小数点后四位
     */
    public float $roi_goal;
    
    /**
     * @var string $schedule_type 投放时间类型，枚举值：SCHEDULE_FROM_NOW从今天起长期投放、SCHEDULE_START_END设置开始和结束日期
     */
    public string $schedule_type;
    
    /**
     * @var string $start_time 投放起始时间，如：2017-01-01 精确到天
     */
    public string $start_time;
    
    /**
     * @var string $end_time 投放结束时间，如：2017-01-01 精确到天
     */
    public string $end_time;
    
    /**
     * @var string $schedule_time 投放时段
     */
    public string $schedule_time;
    
    /**
     * @var string $deep_bid_type 深度优化方式
     */
    public string $deep_bid_type;
    
    /**
     * @var string $bid_type 竞价策略，枚举值：CUSTOM稳定成本、NO_BID最大转化投放、UPPER_CONTROL最优成本
     */
    public string $bid_type;
    
    /**
     * @var string $bid_speed 投放速度，允许值：BALANCE匀速,FAST加速
     */
    public string $bid_speed;
    
    /**
     * @var string $budget_mode 项目预算类型， 枚举值：BUDGET_MODE_INFINITE不限、BUDGET_MODE_DAY日预算
     */
    public string $budget_mode;
    
    /**
     * @var string $budget 项目预算
     */
    public string $budget;
    
    /**
     * @var int $first_roi_goal 首日roi系数
     */
    public int $first_roi_goal;
    
    /**
     * @var string $budget_optimize_switch 支持预算择优分配，枚举值：ON开启，OFF不开启
     */
    public string $budget_optimize_switch;
    
}