<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class EventManagerAvailableEventsGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\EventManagerAvailableEventsGetResponseEventConfigsData> $event_configs 可创建事件列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\EventManagerAvailableEventsGetResponseEventConfigsData::class)]
    public array $event_configs;
    
}