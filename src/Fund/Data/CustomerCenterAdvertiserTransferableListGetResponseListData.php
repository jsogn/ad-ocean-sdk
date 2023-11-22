<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 列表
class CustomerCenterAdvertiserTransferableListGetResponseListData extends Data
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var bool $is_enabled 账户状态，true为审核通过，false为审核不通过，注：账户审核通过方可进行转账
     */
    public bool $is_enabled;
    
}