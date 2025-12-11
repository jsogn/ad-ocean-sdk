<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 账户信息列表
class CgTransferTransferDetailGetResponseTransferTargetRecordListData extends Data
{

    /**
     * @var int $opponent_target_id 锚定账户id，1:N的1
     */
    public int $opponent_target_id;
    
    /**
     * @var int $target_id 目标账户id，1:N的N
     */
    public int $target_id;
    
    /**
     * @var int $transfer_amount 转账金额(单位：分)
     */
    public int $transfer_amount;
    
    /**
     * @var string $transfer_status 账户间转账状态 可选值: NO_TRANSFER 未转账TRANSFER_FAILED 转账失败(终态)TRANSFER_ING 转账中TRANSFER_PART 转账部分成功(终态)TRANSFER_SUCCESS 转账成功(终态)
     */
    public string $transfer_status;
    
    /**
     * @var array<\AdOceanSdk\Fund\Data\CgTransferTransferDetailGetResponseTransferTargetRecordListTransferCapitalRecordListData> $transfer_capital_record_list 转账资金类型列表
     */
    public array $transfer_capital_record_list;
    
}