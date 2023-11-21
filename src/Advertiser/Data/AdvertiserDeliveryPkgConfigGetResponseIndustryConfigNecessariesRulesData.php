<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 具体的资质规则
class AdvertiserDeliveryPkgConfigGetResponseIndustryConfigNecessariesRulesData extends Data
{

    /**
     * @var int $rule_id 原子规则id
     */
    public int $rule_id;
    
    /**
     * @var string $type 规则的资质组成类型：1 组合资质 2 多选一资质 可选值:
     */
    public string $type;
    
    /**
     * @var string $description 原子规则描述，用于引导用户提交
     */
    public string $description;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgConfigGetResponseIndustryConfigNecessariesRulesQualTypesData> $qual_types 资质类型
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgConfigGetResponseIndustryConfigNecessariesRulesQualTypesData::class)]
    public array $qual_types;
    
}