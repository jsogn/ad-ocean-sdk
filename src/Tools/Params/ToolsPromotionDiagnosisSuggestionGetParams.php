<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsPromotionDiagnosisSuggestionGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $promotion_ids 广告ID列表，最多100个
     */
    public array $promotion_ids;
    
    /**
     * @var array<string> $scenes 希望获取建议的场景，允许值：
     */
    public array $scenes;
    
}