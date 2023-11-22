<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 字节小程序快应用资产
class ToolsEventAssetsGetParamFilteringMiniProgramData extends Data
{

    /**
     * @var string $asset_name 字节小程序资产name
     */
    public string $asset_name;
    
}