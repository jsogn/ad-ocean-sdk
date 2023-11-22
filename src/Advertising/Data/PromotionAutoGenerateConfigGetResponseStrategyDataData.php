<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 策略配置详情列表(仅当version=Strategy时有值)
class PromotionAutoGenerateConfigGetResponseStrategyDataData extends Data
{

    /**
     * @var int $strategy_id 策略id
     */
    public int $strategy_id;
    
    /**
     * @var string $type 策略类型 可选值:
     */
    public string $type;
    
    /**
     * @var string $strategy_name 策略名称
     */
    public string $strategy_name;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionAutoGenerateConfigGetResponseStrategyDataInfoData $info 策略基本信息
     */
    public \AdOceanSdk\Advertising\Data\PromotionAutoGenerateConfigGetResponseStrategyDataInfoData $info;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionAutoGenerateConfigGetResponseStrategyDataStrategyStateData> $strategy_state 策略配置项列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionAutoGenerateConfigGetResponseStrategyDataStrategyStateData::class)]
    public array $strategy_state;
    
}