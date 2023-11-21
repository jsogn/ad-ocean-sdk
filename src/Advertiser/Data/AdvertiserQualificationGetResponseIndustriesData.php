<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 行业资质
class AdvertiserQualificationGetResponseIndustriesData extends Data
{

    /**
     * @var int $industry1_id 一级行业ID
     */
    public int $industry1_id;
    
    /**
     * @var string $industry1_name 一级行业名称
     */
    public string $industry1_name;
    
    /**
     * @var int $industry2_id 二级行业ID
     */
    public int $industry2_id;
    
    /**
     * @var string $industry2_name 二级行业名称
     */
    public string $industry2_name;
    
    /**
     * @var int $industry3_id 三级行业ID
     */
    public int $industry3_id;
    
    /**
     * @var string $industry3_name 三级行业名称
     */
    public string $industry3_name;
    
    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserQualificationGetResponseIndustriesPromotionData $promotion 推广资质，相关字段见下
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserQualificationGetResponseIndustriesPromotionData $promotion;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserQualificationGetResponseIndustriesOthersData> $others 开户资质列表，相关字段见下
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserQualificationGetResponseIndustriesOthersData::class)]
    public array $others;
    
    /**
     * @var bool $is_history 是否是历史的补充资质及推广资质，如果是，则行业相关字段无值，重新提交时需归档到具体行业下
     */
    public bool $is_history;
    
}