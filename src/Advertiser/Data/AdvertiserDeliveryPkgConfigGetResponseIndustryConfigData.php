<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 资质规则
class AdvertiserDeliveryPkgConfigGetResponseIndustryConfigData extends Data
{

    /**
     * @var int $config_id 资质规则id
     */
    public int $config_id;
    
    /**
     * @var string $industry_status 行业状态：1 生效 、2 禁投（不允许提交该行业的资质） 可选值:
     */
    public string $industry_status;
    
    /**
     * @var array<int> $industry_ids 第一级到第三级行业id
     */
    public array $industry_ids;
    
    /**
     * @var array<string> $industry_names 第一级到第三级行业名称
     */
    public array $industry_names;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgConfigGetResponseIndustryConfigNecessariesData> $necessaries 必填资质模块配置
     */
    public array $necessaries;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgConfigGetResponseIndustryConfigUnnecessariesData> $unnecessaries 选填资质模块配置
     */
    public array $unnecessaries;
    
}