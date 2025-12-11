<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 可转余额信息列表
class CgTransferCanTransferBalanceGetResponseCanTransferDetailListData extends Data
{

    /**
     * @var int $remitter_target_id 转出方账户id
     */
    public int $remitter_target_id;
    
    /**
     * @var array<\AdOceanSdk\Fund\Data\CgTransferCanTransferBalanceGetResponseCanTransferDetailListPayeeTransferAmountDetailListData> $payee_transfer_amount_detail_list 转入方可转余额信息列表
     */
    public array $payee_transfer_amount_detail_list;
    
    /**
     * @var array<\AdOceanSdk\Fund\Data\CgTransferCanTransferBalanceGetResponseCanTransferDetailListCapitalDetailListData> $capital_detail_list 转出方可转资金列表
     */
    public array $capital_detail_list;
    
}