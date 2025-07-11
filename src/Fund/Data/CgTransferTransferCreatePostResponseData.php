<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class CgTransferTransferCreatePostResponseData extends Data
{

    /**
     * @var string $transfer_serial 转账单号
     */
    public string $transfer_serial;
    
}