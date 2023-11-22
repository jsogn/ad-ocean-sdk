<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 策略配置项列表
class PromotionAutoGenerateConfigCreatePostParamStrategyDataStrategyStateData extends Data
{

    /**
     * @var string $state_key  配置项key
     */
    public string $state_key ;
    
    /**
     * @var string $state_type  配置项类型 可选值:
     */
    public string $state_type ;
    
    /**
     * @var string $state_value 配置项值
     */
    public string $state_value;
    
}