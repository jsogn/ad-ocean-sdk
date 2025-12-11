<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 广告对应的场景列表
class ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListSceneListData extends Data
{

    /**
     * @var string $scene 可选值:
     */
    public string $scene;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListSceneListSuggestionsData> $suggestions 建议列表
     */
    public array $suggestions;
    
}