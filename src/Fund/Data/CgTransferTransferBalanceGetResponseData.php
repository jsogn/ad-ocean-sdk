<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class CgTransferTransferBalanceGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Fund\Data\CgTransferTransferBalanceGetResponseTargetAmountDetailListData> $target_amount_detail_list 账户金额列表
     */
    public array $target_amount_detail_list;
    
}