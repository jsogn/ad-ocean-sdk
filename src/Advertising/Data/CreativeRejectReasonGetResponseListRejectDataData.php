<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 审核建议
class CreativeRejectReasonGetResponseListRejectDataData extends Data
{

    /**
     * @var string $reject_item 审核项
     */
    public string $reject_item;
    
    /**
     * @var string $ 审核建议，审核中/审核通过创意也存在返回审核建议的情况
     */
    public string $;
    
}