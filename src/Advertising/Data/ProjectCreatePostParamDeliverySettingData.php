<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 投放设置
class ProjectCreatePostParamDeliverySettingData extends Data
{

    /**
     * @var string $schedule_type 投放时间类型，允许值：SCHEDULE_FROM_NOW从今天起长期投放、SCHEDULE_START_END设置开始和结束日期
     */
    public string $schedule_type;
    
    /**
     * @var string $start_time 投放起始时间，当schedule_type =SCHEDULE_START_END时必填如：2017-01-01 精确到天，广告投放起始时间不允许修改
     */
    public string $start_time;
    
    /**
     * @var string $end_time 投放结束时间，当schedule_type =SCHEDULE_START_END时必填如：2017-01-01 精确到天
     */
    public string $end_time;
    
    /**
     * @var string $schedule_time 投放时段，默认全时段投放，格式是48*7位字符串，且都是0或1。也就是以半个小时为最小粒度，周一至周日每天分为48个区段，0为不投放，1为投放，不传、全传0、全传1均代表全时段投放。例如：000000000000000000000001111000000000000000000000000000000000000000000001111000000000000000000000000000000000000000000001111000000000000000000000000000000000000000000001111000000000000000000000000000000000000000000001111000000000000000000000000000000000000000000001111000000000000000000000000000000000000000000001111000000000000000000000，则投放时段为周一到周日的11:30~13:30
     */
    public string $schedule_time;
    
    /**
     * @var string $filter_night_switch 过滤夜间投放，枚举值：ON过滤开启 OFF过滤不开启
     */
    public string $filter_night_switch;
    
    /**
     * @var string $deep_bid_type 深度优化方式，当转化目标中含有深度转化时，该字段必填允许值：
     */
    public string $deep_bid_type;
    
    /**
     * @var string $bid_type 竞价策略，允许值：CUSTOM稳定成本、NO_BID最大转化投放、UPPER_CONTROL 最优成本、EXPLORE_UPGRADE广告潜力探索-升级版
     */
    public string $bid_type;
    
    /**
     * @var string $project_custom 项目成本稳投，
     */
    public string $project_custom;
    
    /**
     * @var float $bid 点击出价/展示出价，当delivery_mode = MANUAL&&项目成本稳投开启&&pricing=CPC时填写有效；取值范围：0.2-999
     */
    public float $bid;
    
    /**
     * @var string $budget_mode 项目预算类型， 允许值：BUDGET_MODE_INFINITE不限、BUDGET_MODE_DAY日预算
     */
    public string $budget_mode;
    
    /**
     * @var float $budget 项目预算，取值范围:≥ 300
     */
    public float $budget;
    
    /**
     * @var string $pricing 计费方式，允许值：PRICING_CPM按展示付费,PRICING_CPC按点击付费,PRICING_OCPM目标转化出价-按展示付费（默认值）,PRICING_OCPC目标转化出价-按点击付费
     */
    public string $pricing;
    
    /**
     * @var float $cpa_bid 目标转化出价/预期成本， 取值范围：0.01-10000元
     */
    public float $cpa_bid;
    
    /**
     * @var float $deep_cpabid 深度优化出价，deep_bid_type = DEEP_BID_MIN 时必填。取值范围：0.1~10000元 注意：当 bid_type = NO_BID时，不填写该字段，否则会报错
     */
    public float $deep_cpabid;
    
    /**
     * @var float $roi_goal 深度转化ROI系数, 范围(0,5]，精度：保留小数点后四位，当delivery_mode =PROCEDURAL &&landing_type = APP/MICRO_GAME时&&深度优化方式为付费ROI时必填，当delivery_mode =MANUAL时填写报错
     */
    public float $roi_goal;
    
    /**
     * @var int $first_roi_goal 首日roi系数，范围(0,5]，精度：保留小数点后四位
     */
    public int $first_roi_goal;
    
    /**
     * @var string $budget_optimize_switch 支持预算择优分配，允许值：ON开启，OFF不开启（默认值）
     */
    public string $budget_optimize_switch;
    
}