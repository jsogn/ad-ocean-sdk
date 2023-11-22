<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 快应用数据
class ToolsEventAssetsGetResponseQuickAppData extends Data
{

    /**
     * @var int $asset_id 快应用资产ID
     */
    public int $asset_id;
    
    /**
     * @var string $asset_name 快应用名称
     */
    public string $asset_name;
    
    /**
     * @var string $package_name 快应用包名
     */
    public string $package_name;
    
    /**
     * @var int $quick_app_id 快应用ID
     */
    public int $quick_app_id;
    
}