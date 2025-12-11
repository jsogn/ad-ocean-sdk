<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 必填资质模块
class AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgNecessaryCombineData extends Data
{

    /**
     * @var int $combine_id 来自【推广产品资质规则配置查询接口】，行业的资质规则中的promotion_type_id
     */
    public int $combine_id;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgNecessaryCombineDeliveryRulesData> $delivery_rules 资质规则的组成类型，数组长度最小为1
     */
    public array $delivery_rules;
    
}