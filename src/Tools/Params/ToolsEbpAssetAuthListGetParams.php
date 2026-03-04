<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpAssetAuthListGetParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，允许值：EBP升级版巨量引擎工作台
     */
    public string $account_type;

    /**
     * @var string $asset_type 资产类型，允许值：APPLETS微信小程序BYTED_APPLETS 字节小程序BYTED_GAME 字节小游戏DPA 通用版商品库PRODUCT 升级版商品WECHAT_GAME微信小游戏
     */
    public string $asset_type;

    /**
     * @var int $asset_scope 查询资产范围（按照单资产查询或期望查询某个升级版组织下全部资产的共享范围）查询某个资产当前共享范围：传具体资产ID查询某个团队或包含下级团队资产的共享范围：传团队ID
     */
    public int $asset_scope;

    /**
     * @var string $asset_scope_type 查询的资产范围类型（按照单资产查询或期望查询某个升级版组织下全部资产的共享范围），允许值：
     */
    public string $asset_scope_type;

    /**
     * @var int $page 页码，默认值：1
     */
    public int $page;

    /**
     * @var int $page_size 页面大小，默认值：10，取值范围[0,100]
     */
    public int $page_size;

}