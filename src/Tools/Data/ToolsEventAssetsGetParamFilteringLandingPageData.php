<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 三方落地页数据
class ToolsEventAssetsGetParamFilteringLandingPageData extends Data
{

    /**
     * @var int $asset_id 三方的资产id
     */
    public int $asset_id;
    
    /**
     * @var string $asset_name 三方落地页名称
     */
    public string $asset_name;
    
}