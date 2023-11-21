<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 行业补充资质列表，相关字段见下
class AdvertiserQualificationSubmitPostParamIndustriesOthersData extends Data
{

    /**
     * @var int $qualification_id 资质id
     */
    public int $qualification_id;
    
    /**
     * @var string $attachment_id 资质图片附件id
     */
    public string $attachment_id;
    
}