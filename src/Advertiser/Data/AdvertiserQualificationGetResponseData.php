<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class AdvertiserQualificationGetResponseData extends Data
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $status 主体资质状态
     */
    public string $status;
    
    /**
     * @var string $industry_qua_status 行业资质状态
     */
    public string $industry_qua_status;
    
    /**
     * @var string $reject_reason 拒绝理由
     */
    public string $reject_reason;
    
    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserQualificationGetResponseSubjectData $subject 主体资质，相关字段见下:
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserQualificationGetResponseSubjectData $subject;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserQualificationGetResponseIndustriesData> $industries 行业资质
     */
    public array $industries;
    
}