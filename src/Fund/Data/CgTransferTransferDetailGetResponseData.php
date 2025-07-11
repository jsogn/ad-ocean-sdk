<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class CgTransferTransferDetailGetResponseData extends Data
{

    /**
     * @var string $transfer_serial 转账单号
     */
    public string $transfer_serial;
    
    /**
     * @var string $biz_request_no 幂等id
     */
    public string $biz_request_no;
    
    /**
     * @var string $transfer_direction 转账方向(以目标账户视角确定) 可选值: TRANSFER_IN 转入TRANSFER_OUT 转出
     */
    public string $transfer_direction;
    
    /**
     * @var int $transfer_amount 转账总金额(单位：分)
     */
    public int $transfer_amount;
    
    /**
     * @var string $transfer_status 转账总状态 可选值: NO_TRANSFER 未转账TRANSFER_FAILED 转账失败(终态)TRANSFER_ING 转账中TRANSFER_PART 转账部分成功(终态)TRANSFER_SUCCESS 转账成功(终态)
     */
    public string $transfer_status;
    
    /**
     * @var string $transfer_finish_time 转账完成时间(yyyy-MM-dd HH:mm:ss)
     */
    public string $transfer_finish_time;
    
    /**
     * @var string $transfer_create_time 转账创建时间(yyyy-MM-dd HH:mm:ss)
     */
    public string $transfer_create_time;
    
    /**
     * @var array<\AdOceanSdk\Fund\Data\CgTransferTransferDetailGetResponseTransferTargetRecordListData> $transfer_target_record_list 账户信息列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Fund\Data\CgTransferTransferDetailGetResponseTransferTargetRecordListData::class)]
    public array $transfer_target_record_list;
    
    /**
     * @var string $remark 转账备注
     */
    public string $remark;
    
}