<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 建议列表
class ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListSceneListSuggestionsData extends Data
{

    /**
     * @var string $conclusion 诊断结论，当scene=POTENTIAL时，该字段为空
     */
    public string $conclusion;
    
    /**
     * @var string $scene_type 场景下的细分类型，允许值:
     */
    public string $scene_type;
    
    /**
     * @var string $msg 该场景下所有建议的详细描述
     */
    public string $msg;
    
    /**
     * @var string $name 建议名称
     */
    public string $name;
    
    /**
     * @var string $tool_type 工具类型，可选值:
     */
    public string $tool_type;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListSceneListSuggestionsToolsData> $tools 工具列表
     */
    public array $tools;
    
}