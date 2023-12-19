<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserFundDailyStatGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserFundDailyStatGetResponseListData> $list 广告主ID
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserFundDailyStatGetResponseListData::class)]
    public array $list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}