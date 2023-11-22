<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 获取的诊断建议列表
class ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListData extends Data
{

    /**
     * @var int $promotion_id 广告id
     */
    public int $promotion_id;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListSceneListData> $scene_list 广告对应的场景列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsPromotionDiagnosisSuggestionGetResponseSuggestionListSceneListData::class)]
    public array $scene_list;
    
}