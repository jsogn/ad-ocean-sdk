<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsEventAssetsGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEventAssetsGetResponseLandingPagesData> $landing_pages 三方数据集合
     */
    public array $landing_pages;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEventAssetsGetResponseQuickAppData> $quick_app 快应用数据
     */
    public array $quick_app;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEventAssetsGetResponseAppData> $app 应用数据
     */
    public array $app;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEventAssetsGetResponseMiniProgramData> $mini_program 字节小程序快应用资产
     */
    public array $mini_program;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}