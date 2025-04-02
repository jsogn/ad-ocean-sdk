<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 无效事件标签；若clue_convert_state = INVALID_EVENT，则该字段必填
class ToolsClueCallbackPostParamEventDataData extends Data
{

    /**
     * @var string $reason_code 对线索当前事件状态clue_convert_state选择扩展标签。
     */
    public string $reason_code;
    
    /**
     * @var string $reason_message 自定义原因信息，选填，当reason_code =OTHER时建议填写
     */
    public string $reason_message;
    
}