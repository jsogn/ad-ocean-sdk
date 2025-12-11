<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回值
class CreativeRejectReasonGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeRejectReasonGetResponseListData> $list 审核建议数据
     */
    public array $list;
    
}