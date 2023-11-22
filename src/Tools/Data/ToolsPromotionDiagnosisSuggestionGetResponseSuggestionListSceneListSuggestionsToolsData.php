<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 工具列表
class ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListSceneListSuggestionsToolsData extends Data
{

    /**
     * @var string $tool 工具名称
     */
    public string $tool;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListSceneListSuggestionsToolsParamsData> $params 工具参数列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListSceneListSuggestionsToolsParamsData::class)]
    public array $params;
    
}