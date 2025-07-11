<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 目标账户列表，1:N的N，需要列表内账户类型相同，最多支持100个
class CgTransferTransferCreatePostParamTargetDetailListData extends Data
{

    /**
     * @var int $target_id 目标账户id
     */
    public int $target_id;
    
    /**
     * @var array<\AdOceanSdk\Fund\Data\CgTransferTransferCreatePostParamTargetDetailListTransferCapitalDetailListData> $transfer_capital_detail_list 锚定账户与目标账户转账资金列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Fund\Data\CgTransferTransferCreatePostParamTargetDetailListTransferCapitalDetailListData::class)]
    public array $transfer_capital_detail_list;
    
}