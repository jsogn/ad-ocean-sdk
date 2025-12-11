<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 必填资质模块配置
class AdvertiserDeliveryPkgConfigGetResponseIndustryConfigNecessariesData extends Data
{

    /**
     * @var int $promotion_type_id 推广类型id
     */
    public int $promotion_type_id;
    
    /**
     * @var string $promotion_type_name 推广类名称
     */
    public string $promotion_type_name;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgConfigGetResponseIndustryConfigNecessariesRulesData> $rules 具体的资质规则
     */
    public array $rules;
    
}