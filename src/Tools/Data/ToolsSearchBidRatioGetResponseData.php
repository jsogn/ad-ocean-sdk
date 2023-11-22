<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsSearchBidRatioGetResponseData extends Data
{

    /**
     * @var int $ratio 推荐的快投出价系数
     */
    public int $ratio;
    
}