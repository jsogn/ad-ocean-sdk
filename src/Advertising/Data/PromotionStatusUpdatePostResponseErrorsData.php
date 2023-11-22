<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 更新失败的广告列表
class PromotionStatusUpdatePostResponseErrorsData extends Data
{

    /**
     * @var int $promotion_id 广告ID
     */
    public int $promotion_id;
    
    /**
     * @var string $error_message 错误信息
     */
    public string $error_message;
    
}