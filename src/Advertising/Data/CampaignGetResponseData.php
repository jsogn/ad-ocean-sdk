<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class CampaignGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\CampaignGetResponseListData> $list 广告数组
     */
    public array $list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}