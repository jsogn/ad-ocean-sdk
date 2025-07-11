<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 转账资金类型列表
class CgTransferTransferDetailGetResponseTransferTargetRecordListTransferCapitalRecordListData extends Data
{

    /**
     * @var string $capital_type 转账资金类型 可选值: CREDIT_BIDDING 授信竞价CREDIT_BRAND 授信品牌CREDIT_GENERAL 授信通用GRANT_COMMON 信息流赠款GRANT_DEFAULT 通用赠款GRANT_SEARCH 搜索赠款GRANT_UNION 穿山甲赠款PREPAY_BIDDING 预付竞价PREPAY_BRAND 预付品牌PREPAY_GENERAL 预付通用
     */
    public string $capital_type;
    
    /**
     * @var int $transfer_amount 转账资金金额(单位：分)
     */
    public int $transfer_amount;
    
    /**
     * @var string $transfer_status 转账资金状态 可选值: NO_TRANSFER 未转账TRANSFER_FAILED 转账失败(终态)TRANSFER_ING 转账中TRANSFER_SUCCESS 转账成功(终态)
     */
    public string $transfer_status;
    
    /**
     * @var string $fail_reason 失败原因
     */
    public string $fail_reason;
    
}