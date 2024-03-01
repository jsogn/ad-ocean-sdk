<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤字段，json格式，支持字段如下
class ReportAdvertiserGetParamFilteringData extends Data
{

    /**
     * @var array<string> $delivery_mode 投放模式筛选。允许值:STANDARD:标准投放。ADLAB_FREE:管家&省心投放
     */
    public array $delivery_mode;
    
    /**
     * @var string $platform_version 获取的数据平台版本允许值:V1:原版。V2:巨量引擎体验版。ALL:原版+巨量引擎体验版（默认值）
     */
    public string $platform_version;
    
}