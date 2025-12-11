<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserDeliveryQualificationListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryQualificationListGetResponseListData> $list 投放资质列表
     */
    public array $list;

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;

}