<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 字节小程序快应用资产
class ToolsEventAssetsGetResponseMiniProgramData extends Data
{

    /**
     * @var int $asset_id 字节小程序资产id
     */
    public int $asset_id;
    
    /**
     * @var string $asset_name 字节小程序资产名称
     */
    public string $asset_name;
    
    /**
     * @var string $mini_program_id 字节小程序id
     */
    public string $mini_program_id;
    
}