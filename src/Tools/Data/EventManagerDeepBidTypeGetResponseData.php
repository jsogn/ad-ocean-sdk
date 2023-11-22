<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class EventManagerDeepBidTypeGetResponseData extends Data
{

    /**
     * @var array<string> $deep_bid_type 可用深度优化方式
     */
    public array $deep_bid_type;
    
}