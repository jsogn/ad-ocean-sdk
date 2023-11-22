<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 广告维度审核建议列表
class PromotionRejectReasonGetResponseListPromotionRejectData extends Data
{

    /**
     * @var string $content 审核项
     */
    public string $content;
    
    /**
     * @var array<string> $reject_reason 拒绝建议
     */
    public array $reject_reason;
    
    /**
     * @var array<string> $suggestion 审核建议
     */
    public array $suggestion;
    
}