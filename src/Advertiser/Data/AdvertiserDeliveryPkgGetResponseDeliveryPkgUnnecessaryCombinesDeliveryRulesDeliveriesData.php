<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 资质的具体信息
class AdvertiserDeliveryPkgGetResponseDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesData extends Data
{

    /**
     * @var int $qualification_id 资质id
     */
    public int $qualification_id;
    
    /**
     * @var int $qual_type 资质类型id
     */
    public int $qual_type;
    
    /**
     * @var string $qual_type_name 资质类型名称
     */
    public string $qual_type_name;
    
    /**
     * @var string $status 资质审核状态 可选值:
     */
    public string $status;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesAttachmentsData> $attachments 资质图片附件
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesAttachmentsData::class)]
    public array $attachments;
    
    /**
     * @var string $reject_reason 拒绝理由，若资质被拒绝，则会有拒绝理由
     */
    public string $reject_reason;
    
}