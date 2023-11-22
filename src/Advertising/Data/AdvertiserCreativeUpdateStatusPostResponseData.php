<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class AdvertiserCreativeUpdateStatusPostResponseData extends Data
{

    /**
     * @var array<int> $creative_ids 创意ID集合
     */
    public array $creative_ids;
    
}