<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 策略配置项列表
class CreativeStrategyListGetResponseStrategyModelsStateListData extends Data
{

    /**
     * @var string $state_key 配置项key
     */
    public string $state_key;
    
    /**
     * @var string $state_name 配置项名称
     */
    public string $state_name;
    
    /**
     * @var string $state_type 配置项类型 可选值:
     */
    public string $state_type;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeStrategyListGetResponseStrategyModelsStateListLimitData $limit 配置项限制条件
     */
    public \AdOceanSdk\Advertising\Data\CreativeStrategyListGetResponseStrategyModelsStateListLimitData $limit;
    
}