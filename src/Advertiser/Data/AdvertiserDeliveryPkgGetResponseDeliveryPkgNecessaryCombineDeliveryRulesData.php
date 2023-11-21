<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 资质规则
class AdvertiserDeliveryPkgGetResponseDeliveryPkgNecessaryCombineDeliveryRulesData extends Data
{

    /**
     * @var int $rule_id 原子规则id
     */
    public int $rule_id;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgNecessaryCombineDeliveryRulesDeliveriesData> $deliveries 资质的具体信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgNecessaryCombineDeliveryRulesDeliveriesData::class)]
    public array $deliveries;
    
}