<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 素材列表
class FileRebateMaterialSearchGetResponseMaterialsData extends Data
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $operator_tag 运营标签
     */
    public int $operator_tag;
    
    /**
     * @var int $rebate_calc_policy_type 政策类型
     */
    public int $rebate_calc_policy_type;
    
    /**
     * @var int $rebate_calc_settlement_stats_type 结算行业统计类型
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
    
    /**
     * @var string $customer_name 客户名称
     */
    public string $customer_name;
    
    /**
     * @var string $optimizer_name 代理商优化师
     */
    public string $optimizer_name;
    
    /**
     * @var string $agent_sale_name 代理商销售
     */
    public string $agent_sale_name;
    
    /**
     * @var int $second_ad_agent_id 二代代理商账户id
     */
    public int $second_ad_agent_id;
    
    /**
     * @var \AdOceanSdk\File\Data\FileRebateMaterialSearchGetResponseMaterialsMaterialInfoData $material_info 素材信息
     */
    public \AdOceanSdk\File\Data\FileRebateMaterialSearchGetResponseMaterialsMaterialInfoData $material_info;
    
    /**
     * @var string $update_date 数据更新日期
     */
    public string $update_date;
    
}