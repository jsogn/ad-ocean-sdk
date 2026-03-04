<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 授权资产范围，上限20
class ToolsEbpAssetAuthPostParamAssetsData extends Data
{

    /**
     * @var string $asset_type 资产类型，允许值：APPLETS 小程序BYTED_APPLETS 字节小程序BYTED_GAME 字节小游戏DPA 通用版商品库PRODUCT 升级版商品WECHAT_GAME 小游戏
     */
    public string $asset_type;

    /**
     * @var int $asset_scope 共享资产范围（按照单资产查询或期望查询某个升级版组织下全部资产的共享范围）
     */
    public int $asset_scope;

    /**
     * @var string $asset_scope_type 
     */
    public string $asset_scope_type;

}