<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsPromotionDiagnosisSuggestionAcceptPostResponseData extends Data
{

    /**
     * @var array<string> $suggestion_accepted 采纳成功的工具列表
     */
    public array $suggestion_accepted;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionDiagnosisSuggestionAcceptPostResponseSuggestionAcceptFailedData> $suggestion_accept_failed 采纳失败的工具列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsPromotionDiagnosisSuggestionAcceptPostResponseSuggestionAcceptFailedData::class)]
    public array $suggestion_accept_failed;
    
}