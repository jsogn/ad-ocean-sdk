<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class FileRebateMaterialSearchGetParamFilteringData extends Data
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $customer_name 客户名称
     */
    public string $customer_name;
    
    /**
     * @var array<string> $material_tags INEFFICIENT_MATERIAL（低效素材）
     */
    public array $material_tags;
    
    /**
     * @var int $material_is_effective 当月最新一天素材是否在投
允许值：
     */
    public int $material_is_effective;
    
    /**
     * @var int $is_valid_video_material 【政策粒度】是否有效素材
允许值：
     */
    public int $is_valid_video_material;
    
    /**
     * @var int $policy_cost_min 【政策粒度】消耗范围区间下限 ，格式限制：整数
     */
    public int $policy_cost_min;
    
    /**
     * @var int $policy_cost_max 【政策粒度】消耗范围区间上限，格式限制：整数
     */
    public int $policy_cost_max;
    
    /**
     * @var int $operator_tag 运营标签
允许值：
     */
    public int $operator_tag;
    
    /**
     * @var int $rebate_calc_policy_type 政策类型
允许值：
     */
    public int $rebate_calc_policy_type;
    
    /**
     * @var string $material_create_start_date 素材创建日期范围开始日期
格式：yyyy-mm-dd
     */
    public string $material_create_start_date;
    
    /**
     * @var string $material_create_end_date 素材创建日期范围结束日期
格式：yyyy-mm-dd
     */
    public string $material_create_end_date;
    
    /**
     * @var int $rebate_calc_settlement_stats_type 结算行业统计类型
允许值：
     */
    public int $rebate_calc_settlement_stats_type;
    
    /**
     * @var string $rebate_calc_first_industry_name 一级结算行业
     */
    public string $rebate_calc_first_industry_name;
    
    /**
     * @var string $rebate_calc_second_industry_name 二级结算行业
     */
    public string $rebate_calc_second_industry_name;
    
}