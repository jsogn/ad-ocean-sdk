<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 策略数据(列表中strategy_id需唯一, 即同一个策略（strategy）的策略配置项列表(strategy_state)，需放到同一个对象内，不可分开传递)
class PromotionAutoGenerateConfigCreatePostParamStrategyDataData extends Data
{

    /**
     * @var int $strategy_id  策略id
     */
    public int $strategy_id ;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionAutoGenerateConfigCreatePostParamStrategyDataStrategyStateData> $strategy_state 策略配置项列表
     */
    public array $strategy_state;
    
}