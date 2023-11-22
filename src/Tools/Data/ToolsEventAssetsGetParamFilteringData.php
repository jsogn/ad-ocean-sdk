<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class ToolsEventAssetsGetParamFilteringData extends Data
{

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEventAssetsGetParamFilteringLandingPageData $landing_page 三方落地页数据
     */
    public \AdOceanSdk\Tools\Data\ToolsEventAssetsGetParamFilteringLandingPageData $landing_page;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEventAssetsGetParamFilteringQuickAppData $quick_app 快应用数据
     */
    public \AdOceanSdk\Tools\Data\ToolsEventAssetsGetParamFilteringQuickAppData $quick_app;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEventAssetsGetParamFilteringAppData $app 应用数据
     */
    public \AdOceanSdk\Tools\Data\ToolsEventAssetsGetParamFilteringAppData $app;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEventAssetsGetParamFilteringMiniProgramData $mini_program 字节小程序快应用资产
     */
    public \AdOceanSdk\Tools\Data\ToolsEventAssetsGetParamFilteringMiniProgramData $mini_program;
    
}