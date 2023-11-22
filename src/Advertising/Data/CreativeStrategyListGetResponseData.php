<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CreativeStrategyListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeStrategyListGetResponseStrategyModelsData> $strategy_models 策略列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeStrategyListGetResponseStrategyModelsData::class)]
    public array $strategy_models;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}