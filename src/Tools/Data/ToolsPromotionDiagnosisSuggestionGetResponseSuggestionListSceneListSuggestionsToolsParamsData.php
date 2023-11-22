<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 工具参数列表
class ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListSceneListSuggestionsToolsParamsData extends Data
{

    /**
     * @var string $param_name 工具参数名称
     */
    public string $param_name;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListSceneListSuggestionsToolsParamsParamValueData $param_value 工具参数值
     */
    public \AdOceanSdk\Tools\Data\ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListSceneListSuggestionsToolsParamsParamValueData $param_value;
    
}