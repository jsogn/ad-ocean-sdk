<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 快应用数据
class ToolsEventAssetsGetParamFilteringQuickAppData extends Data
{

    /**
     * @var string $asset_name 快应用包名，模糊搜索
     */
    public string $asset_name;
    
}