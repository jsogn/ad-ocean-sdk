<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 应用数据
class ToolsEventAssetsGetParamFilteringAppData extends Data
{

    /**
     * @var string $asset_name 资产名，模糊搜索
     */
    public string $asset_name;
    
    /**
     * @var string $app_package_name 应用包名，精确搜索
     */
    public string $app_package_name;
    
}