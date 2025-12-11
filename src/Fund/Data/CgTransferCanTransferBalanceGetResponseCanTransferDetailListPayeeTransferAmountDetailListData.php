<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 转入方可转余额信息列表
class CgTransferCanTransferBalanceGetResponseCanTransferDetailListPayeeTransferAmountDetailListData extends Data
{

    /**
     * @var int $payee_target_id 转入方账户id
     */
    public int $payee_target_id;
    
    /**
     * @var array<\AdOceanSdk\Fund\Data\CgTransferCanTransferBalanceGetResponseCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListData> $capital_detail_list 转入方可转资金列表
     */
    public array $capital_detail_list;
    
}