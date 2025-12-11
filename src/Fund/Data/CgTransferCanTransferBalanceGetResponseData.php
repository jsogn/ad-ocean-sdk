<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class CgTransferCanTransferBalanceGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Fund\Data\CgTransferCanTransferBalanceGetResponseCanTransferDetailListData> $can_transfer_detail_list 可转余额信息列表
     */
    public array $can_transfer_detail_list;
    
}