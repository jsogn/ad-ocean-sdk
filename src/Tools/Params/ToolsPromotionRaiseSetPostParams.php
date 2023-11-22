<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsPromotionRaiseSetPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主ID
     */
    public int $advertiser_id ;
    
    /**
     * @var int $promotion_id  广告ID
     */
    public int $promotion_id ;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionRaiseSetPostParamRaiseInfoData> $raise_info  起量信息，如果需要全部删除请传[]
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsPromotionRaiseSetPostParamRaiseInfoData::class)]
    public array $raise_info ;
    
}