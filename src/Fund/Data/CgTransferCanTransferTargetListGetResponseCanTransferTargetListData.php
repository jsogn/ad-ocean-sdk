<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 可转账户列表
class CgTransferCanTransferTargetListGetResponseCanTransferTargetListData extends Data
{

    /**
     * @var int $target_id 可转账户id
     */
    public int $target_id;
    
}