<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 具体的资质信息，数组长度最小为1
class AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgNecessaryCombineDeliveryRulesDeliveriesData extends Data
{

    /**
     * @var int $qualification_id 新增时传0；编辑时传入前置查询到的资质id
     */
    public int $qualification_id;
    
    /**
     * @var int $qual_type 资质类型id，来自【推广产品资质规则配置查询接口】
     */
    public int $qual_type;
    
    /**
     * @var array<int> $attachments 资质图片附件，数组长度1~50
     */
    public array $attachments;
    
}