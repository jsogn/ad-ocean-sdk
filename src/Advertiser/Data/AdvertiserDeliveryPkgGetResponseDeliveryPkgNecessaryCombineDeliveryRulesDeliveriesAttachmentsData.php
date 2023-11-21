<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 资质图片附件
class AdvertiserDeliveryPkgGetResponseDeliveryPkgNecessaryCombineDeliveryRulesDeliveriesAttachmentsData extends Data
{

    /**
     * @var int $attachment_id 附件id
     */
    public int $attachment_id;
    
    /**
     * @var string $picture_url 图片链接
     */
    public string $picture_url;
    
}