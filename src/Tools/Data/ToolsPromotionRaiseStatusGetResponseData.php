<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsPromotionRaiseStatusGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionRaiseStatusGetResponseListData> $list 
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsPromotionRaiseStatusGetResponseListData::class)]
    public array $list;
    
}