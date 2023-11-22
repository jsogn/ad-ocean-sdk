<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class EventManagerEventConfigsGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\EventManagerEventConfigsGetResponseEventConfigsData> $event_configs 已创建事件列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\EventManagerEventConfigsGetResponseEventConfigsData::class)]
    public array $event_configs;
    
}