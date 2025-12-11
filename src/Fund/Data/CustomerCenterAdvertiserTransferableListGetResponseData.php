<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CustomerCenterAdvertiserTransferableListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Fund\Data\CustomerCenterAdvertiserTransferableListGetResponseListData> $list 列表
     */
    public array $list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}