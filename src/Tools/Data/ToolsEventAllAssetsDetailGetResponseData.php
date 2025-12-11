<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsEventAllAssetsDetailGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEventAllAssetsDetailGetResponseAssetListData> $asset_list 资产列表
     */
    public array $asset_list;
    
}