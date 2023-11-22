<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsEstimatedPriceGetResponseData extends Data
{

    /**
     * @var float $upper_bound 建议出价上界，单位为元
     */
    public float $upper_bound;
    
    /**
     * @var float $lower_bound 建议出价下界，单位为元
     */
    public float $lower_bound;
    
    /**
     * @var float $cpc_price 回填建议出价，单位为元
     */
    public float $cpc_price;
    
}