<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 资质类型
class AdvertiserDeliveryPkgConfigGetResponseIndustryConfigUnnecessariesRulesQualTypesData extends Data
{

    /**
     * @var int $qual_type 资质类型id
     */
    public int $qual_type;
    
    /**
     * @var string $qual_type_name 资质类型名称
     */
    public string $qual_type_name;
    
}