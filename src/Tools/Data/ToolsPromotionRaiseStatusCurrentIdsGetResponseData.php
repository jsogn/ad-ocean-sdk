<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsPromotionRaiseStatusCurrentIdsGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionRaiseStatusCurrentIdsGetResponseDataData> $data 
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsPromotionRaiseStatusCurrentIdsGetResponseDataData::class)]
    public array $data;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionRaiseStatusCurrentIdsGetResponseErrorListData> $error_list 
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsPromotionRaiseStatusCurrentIdsGetResponseErrorListData::class)]
    public array $error_list;
    
}