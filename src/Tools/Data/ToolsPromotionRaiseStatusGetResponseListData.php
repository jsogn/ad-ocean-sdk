<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class ToolsPromotionRaiseStatusGetResponseListData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionRaiseStatusGetResponseListRaiseInfoData> $raise_info 起量信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsPromotionRaiseStatusGetResponseListRaiseInfoData::class)]
    public array $raise_info;
    
}