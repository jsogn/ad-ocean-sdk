<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 锚定账户与目标账户转账资金列表
class CgTransferTransferCreatePostParamTargetDetailListTransferCapitalDetailListData extends Data
{

    /**
     * @var string $capital_type 转账资金类型 可选值: CREDIT_BIDDING 授信竞价CREDIT_BRAND 授信品牌CREDIT_GENERAL 授信通用GRANT_COMMON 信息流赠款GRANT_DEFAULT 通用赠款GRANT_SEARCH 搜索赠款GRANT_UNION 穿山甲赠款PREPAY_BIDDING 预付竞价PREPAY_BRAND 预付品牌PREPAY_GENERAL 预付通用
     */
    public string $capital_type;
    
    /**
     * @var int $transfer_amount 转账资金金额(单位：分)
     */
    public int $transfer_amount;
    
}