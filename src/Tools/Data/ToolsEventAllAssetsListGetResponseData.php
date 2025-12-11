<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsEventAllAssetsListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEventAllAssetsListGetResponseAssetListData> $asset_list 账户下的资产列表，不支持查询已删除的资产
     */
    public array $asset_list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}