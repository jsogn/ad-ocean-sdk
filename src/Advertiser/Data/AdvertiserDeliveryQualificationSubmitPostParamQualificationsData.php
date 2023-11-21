<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 投放资质信息
class AdvertiserDeliveryQualificationSubmitPostParamQualificationsData extends Data
{

    /**
     * @var string $qualification_type 可选值:
     */
    public string $qualification_type;
    
    /**
     * @var array<int> $attachment_ids 图片附件ids，通过【上传资质图片】接口获取
     */
    public array $attachment_ids;
    
}