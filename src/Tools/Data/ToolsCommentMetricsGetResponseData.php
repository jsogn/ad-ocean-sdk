<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsCommentMetricsGetResponseData extends Data
{

    /**
     * @var int $total_count 可见评论数
     */
    public int $total_count;
    
    /**
     * @var int $negative_count 可见负评数
     */
    public int $negative_count;
    
    /**
     * @var float $negative_rate 可见评论负评率
     */
    public float $negative_rate;
    
}