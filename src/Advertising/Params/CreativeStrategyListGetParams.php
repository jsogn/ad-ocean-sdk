<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class CreativeStrategyListGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 
     */
    public int $advertiser_id;
    
    /**
     * @var array<string> $strategy_types 策略类型(支持多选)
     */
    public array $strategy_types;
    
    /**
     * @var int $page 页码，从1开始, 默认1
     */
    public int $page;
    
    /**
     * @var int $page_size 分页大小, 取值[1-100], 默认10
     */
    public int $page_size;
    
}