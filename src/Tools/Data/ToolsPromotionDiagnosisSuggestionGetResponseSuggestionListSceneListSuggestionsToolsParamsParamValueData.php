<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 工具参数值
class ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListSceneListSuggestionsToolsParamsParamValueData extends Data
{

    /**
     * @var string $string_param 字符类型参数
     */
    public string $string_param;
    
    /**
     * @var bool $boolean_param 布尔类型参数
     */
    public bool $boolean_param;
    
    /**
     * @var array<string> $list_param 列表类型参数
     */
    public array $list_param;
    
    /**
     * @var array $object_list_param 对象列表类型参数，详细信息见下方【工具参数名称&工具参数值 对应说明】
     */
    public array $object_list_param;
    
}