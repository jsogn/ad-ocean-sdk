<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 余额详情列表
class FundSharedWalletBalanceGetResponseListBalanceDetailData extends Data
{

    /**
     * @var int $balance 余额，单位：元，精度：两位小数
     */
    public int $balance;
    
    /**
     * @var string $billing_inventory 余额可用广告位，DEFAULT：通用、SEARCH：搜索、UNION：穿山甲、COMMON：信息流广告
     */
    public string $billing_inventory;
    
}