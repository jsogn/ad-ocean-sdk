<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 资质图片列表
class AdvertiserDeliveryQualificationListGetResponseListImagesData extends Data
{

    /**
     * @var int $attachment_id 附件ID
     */
    public int $attachment_id;
    
    /**
     * @var string $image_download_url 资质图片下载链接
     */
    public string $image_download_url;
    
    /**
     * @var string $image_preview_url 资质图片预览链接
     */
    public string $image_preview_url;
    
}