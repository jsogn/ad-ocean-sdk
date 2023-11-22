<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class ToolsPromotionRaiseStatusCurrentIdsGetResponseErrorListData extends Data
{

    /**
     * @var int $promotion_id 获取一键起量状态失败的广告ID
     */
    public int $promotion_id;
    
    /**
     * @var string $error_reason 获取一键起量状态失败的错误原因
     */
    public string $error_reason;
    
}