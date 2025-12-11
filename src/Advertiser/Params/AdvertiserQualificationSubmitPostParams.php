<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserQualificationSubmitPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserQualificationSubmitPostParamSubjectData $subject 主体资质，相关字段见下:
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserQualificationSubmitPostParamSubjectData $subject;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserQualificationSubmitPostParamIndustriesData> $industries 行业资质
     */
    public array $industries;
    
}