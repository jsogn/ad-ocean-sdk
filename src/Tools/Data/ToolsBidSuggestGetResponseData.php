<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsBidSuggestGetResponseData extends Data
{

    /**
     * @var float $suggested_bid 建议出价
     */
    public float $suggested_bid;
    
    /**
     * @var float $bid_high_50 竞争力超过50%的计划（手动出价获取）
     */
    public float $bid_high_50;
    
    /**
     * @var float $bid_high_90 竞争力超过90%的计划（手动出价获取）
     */
    public float $bid_high_90;
    
    /**
     * @var int $smart_bid_suggest_budget 建议日预算（自动出价获取）
     */
    public int $smart_bid_suggest_budget;
    
    /**
     * @var array<int> $smart_budget_range 建议日预算范围（自动出价获取）
     */
    public array $smart_budget_range;
    
    /**
     * @var array $smart_bid_range 预期成本范围（自动出价获取）
     */
    public array $smart_bid_range;
    
}