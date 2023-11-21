<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 资质规则
class AdvertiserDeliveryPkgGetResponseDeliveryPkgUnnecessaryCombinesDeliveryRulesData extends Data
{

    /**
     * @var int $rule_id 原子规则id
     */
    public int $rule_id;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesData> $deliveries 资质的具体信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesData::class)]
    public array $deliveries;
    
}