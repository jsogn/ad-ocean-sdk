<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 投放资质列表
class AdvertiserDeliveryQualificationListGetResponseListData extends Data
{

    /**
     * @var int $qualification_id 资质ID
     */
    public int $qualification_id;
    
    /**
     * @var string $qualification_type 资质类型，枚举值：
     */
    public string $qualification_type;
    
    /**
     * @var string $status 状态，枚举值：
     */
    public string $status;
    
    /**
     * @var string $reject_reason 审核建议
     */
    public string $reject_reason;
    
    /**
     * @var string $audit_time 审核时间，格式：yyyy-mm-dd hh:mm:ss
     */
    public string $audit_time;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryQualificationListGetResponseListImagesData> $images 资质图片列表
     */
    public array $images;
    
}