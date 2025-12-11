<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 选填资质模块
class AdvertiserDeliveryPkgGetResponseDeliveryPkgUnnecessaryCombinesData extends Data
{

    /**
     * @var int $combine_id 来自【推广产品资质规则配置查询接口】，行业的资质规则中的combine_id
     */
    public int $combine_id;
    
    /**
     * @var string $description 选填资质描述
     */
    public string $description;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgUnnecessaryCombinesDeliveryRulesData> $delivery_rules 资质规则
     */
    public array $delivery_rules;
    
}