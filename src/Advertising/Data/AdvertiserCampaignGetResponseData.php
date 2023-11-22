<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserCampaignGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCampaignGetResponseListData> $list 广告数组
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCampaignGetResponseListData::class)]
    public array $list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}