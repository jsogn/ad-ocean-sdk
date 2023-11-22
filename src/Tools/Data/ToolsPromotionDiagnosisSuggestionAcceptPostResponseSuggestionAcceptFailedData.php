<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 采纳失败的工具列表
class ToolsPromotionDiagnosisSuggestionAcceptPostResponseSuggestionAcceptFailedData extends Data
{

    /**
     * @var string $tool_type 采纳失败的工具
     */
    public string $tool_type;
    
    /**
     * @var string $fail_reason 采纳失败的原因
     */
    public string $fail_reason;
    
}