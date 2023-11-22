<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class ToolsPromotionRaiseStatusCurrentIdsGetResponseDataData extends Data
{

    /**
     * @var int $promotion_id 广告ID
     */
    public int $promotion_id;
    
    /**
     * @var string $status 当前一键起量状态 可选值:
     */
    public string $status;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsPromotionRaiseStatusCurrentIdsGetResponseDataRaiseInfoData $raise_info 当前的起量信息， 当status=RAISING时返回该字段
     */
    public \AdOceanSdk\Tools\Data\ToolsPromotionRaiseStatusCurrentIdsGetResponseDataRaiseInfoData $raise_info;
    
}