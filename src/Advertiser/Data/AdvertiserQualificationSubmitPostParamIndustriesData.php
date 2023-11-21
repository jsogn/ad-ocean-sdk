<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 行业资质
class AdvertiserQualificationSubmitPostParamIndustriesData extends Data
{

    /**
     * @var int $industry_id 行业id
     */
    public int $industry_id;
    
    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserQualificationSubmitPostParamIndustriesPromotionData $promotion 推广资质，相关字段见下
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserQualificationSubmitPostParamIndustriesPromotionData $promotion;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserQualificationSubmitPostParamIndustriesOthersData> $others 行业补充资质列表，相关字段见下
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserQualificationSubmitPostParamIndustriesOthersData::class)]
    public array $others;
    
}