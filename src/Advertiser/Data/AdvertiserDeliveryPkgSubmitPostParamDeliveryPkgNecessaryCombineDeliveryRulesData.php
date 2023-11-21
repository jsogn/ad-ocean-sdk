<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 资质规则的组成类型，数组长度最小为1
class AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgNecessaryCombineDeliveryRulesData extends Data
{

    /**
     * @var int $rule_id 资质的规则id，来自【推广产品资质规则配置查询接口】
     */
    public int $rule_id;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgNecessaryCombineDeliveryRulesDeliveriesData> $deliveries 具体的资质信息，数组长度最小为1
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgNecessaryCombineDeliveryRulesDeliveriesData::class)]
    public array $deliveries;
    
}