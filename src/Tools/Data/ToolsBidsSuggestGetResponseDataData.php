<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class ToolsBidsSuggestGetResponseDataData extends Data
{

    /**
     * @var float $bid_high_30 竞争力超过30%广告的高跑量出价
     */
    public float $bid_high_30;
    
    /**
     * @var float $bid_high_50 竞争力超过30%广告的高跑量出价
     */
    public float $bid_high_50;
    
    /**
     * @var float $bid_high_90 竞争力超过30%广告的高跑量出价
     */
    public float $bid_high_90;
    
}