<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 选填资质模块，数组长度0~30
class AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgUnnecessaryCombinesData extends Data
{

    /**
     * @var int $combine_id 来自【推广产品资质规则配置查询接口】，行业的资质规则中的combine_id
     */
    public int $combine_id;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgUnnecessaryCombinesDeliveryRulesData> $delivery_rules 资质规则的组成类型，数组长度最小为1
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgUnnecessaryCombinesDeliveryRulesData::class)]
    public array $delivery_rules;
    
}