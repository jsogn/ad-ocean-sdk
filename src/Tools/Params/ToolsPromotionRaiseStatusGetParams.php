<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsPromotionRaiseStatusGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主ID
     */
    public int $advertiser_id ;
    
    /**
     * @var array<int> $promotion_ids  广告ID，最多只允许传1个
     */
    public array $promotion_ids ;
    
}