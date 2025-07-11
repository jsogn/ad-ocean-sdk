<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class CgTransferCanTransferTargetListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Fund\Data\CgTransferCanTransferTargetListGetResponseCanTransferTargetListData> $can_transfer_target_list 可转账户列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Fund\Data\CgTransferCanTransferTargetListGetResponseCanTransferTargetListData::class)]
    public array $can_transfer_target_list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}