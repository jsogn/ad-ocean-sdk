<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 账户金额列表
class CgTransferTransferBalanceGetResponseTargetAmountDetailListData extends Data
{

    /**
     * @var int $target_id 账户id
     */
    public int $target_id;
    
    /**
     * @var array<\AdOceanSdk\Fund\Data\CgTransferTransferBalanceGetResponseTargetAmountDetailListCapitalDetailListData> $capital_detail_list 可转资金列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Fund\Data\CgTransferTransferBalanceGetResponseTargetAmountDetailListCapitalDetailListData::class)]
    public array $capital_detail_list;
    
    /**
     * @var int $deposit_amount 竞价消耗保证金金额(单位：分)
     */
    public int $deposit_amount;
    
    /**
     * @var int $total_transfer_amount 总可转金额(单位：分)
     */
    public int $total_transfer_amount;
    
}