<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 选填资质模块配置
class AdvertiserDeliveryPkgConfigGetResponseIndustryConfigUnnecessariesData extends Data
{

    /**
     * @var int $combine_id 规则组合id
     */
    public int $combine_id;
    
    /**
     * @var string $description 选填资质场景描述，用于引导用户提交
     */
    public string $description;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgConfigGetResponseIndustryConfigUnnecessariesRulesData> $rules 具体的资质规则
     */
    public array $rules;
    
}