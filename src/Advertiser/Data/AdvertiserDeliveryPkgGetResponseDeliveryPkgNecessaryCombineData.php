<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 必填资质模块
class AdvertiserDeliveryPkgGetResponseDeliveryPkgNecessaryCombineData extends Data
{

    /**
     * @var int $combine_id 推广类型id，来自【推广产品资质规则配置查询接口】，行业的资质规则中的promotion_type_id
     */
    public int $combine_id;
    
    /**
     * @var string $description 推广类型描述
     */
    public string $description;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgNecessaryCombineDeliveryRulesData> $delivery_rules 资质规则
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgNecessaryCombineDeliveryRulesData::class)]
    public array $delivery_rules;
    
}