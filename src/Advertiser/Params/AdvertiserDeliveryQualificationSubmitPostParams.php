<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserDeliveryQualificationSubmitPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主账号ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryQualificationSubmitPostParamQualificationsData> $qualifications 投放资质信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryQualificationSubmitPostParamQualificationsData::class)]
    public array $qualifications;
    
}