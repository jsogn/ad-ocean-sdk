<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 账户下的资产列表，不支持查询已删除的资产
class ToolsEventAllAssetsListGetResponseAssetListData extends Data
{

    /**
     * @var string $asset_type 资产类型，允许值：
     */
    public string $asset_type;
    
    /**
     * @var int $asset_id 资产id
     */
    public int $asset_id;
    
    /**
     * @var string $asset_name 资产名称
     */
    public string $asset_name;
    
    /**
     * @var string $share_type 资产来源
MY_CREATIONS 我创建的
SHARING 共享中
SHATE_EXPIRED 共享失效 可选值:
     */
    public string $share_type;
    
    /**
     * @var string $create_time 资产创建时间，格式`YYYY-MM-DD HH:MM:SS`
     */
    public string $create_time;
    
    /**
     * @var string $modify_time 资产修改时间，格式`YYYY-MM-DD HH:MM:SS`
     */
    public string $modify_time;
    
}