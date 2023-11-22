<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 批量修改广告状态，list长度限制1～10
class PromotionStatusUpdatePostParamData extends Data
{

    /**
     * @var int $promotion_id 广告ID
     */
    public int $promotion_id;
    
    /**
     * @var string $opt_status 操作，ENABLE启用广告、DISABLE暂停广告
     */
    public string $opt_status;
    
}