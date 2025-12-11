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
    public array $data;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionRaiseStatusCurrentIdsGetResponseErrorListData> $error_list 
     */
    public array $error_list;
    
}