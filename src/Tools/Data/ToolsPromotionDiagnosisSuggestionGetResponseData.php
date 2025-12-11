<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsPromotionDiagnosisSuggestionGetResponseData extends Data
{

    /**
     * @var string $diagnosis_id 诊断id
     */
    public string $diagnosis_id;
    
    /**
     * @var string $expire_timestamp 诊断id的过期时间，格式：YYYY-MM-DD HH:mm:ss
     */
    public string $expire_timestamp;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListData> $suggestion_list 获取的诊断建议列表
     */
    public array $suggestion_list;
    
}