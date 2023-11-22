<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 属性配置
class EventManagerEventConfigsGetResponseEventConfigsAttributionConfigurationData extends Data
{

    /**
     * @var int $attribution_window 归因窗口
     */
    public int $attribution_window;
    
}