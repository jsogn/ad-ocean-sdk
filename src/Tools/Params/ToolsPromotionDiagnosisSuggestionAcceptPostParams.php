<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsPromotionDiagnosisSuggestionAcceptPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $promotion_id 广告项目ID
     */
    public int $promotion_id;
    
    /**
     * @var string $diagnosis_id 诊断id
     */
    public string $diagnosis_id;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionDiagnosisSuggestionAcceptPostParamToolsData> $tools 工具列表
     */
    public array $tools;
    
}