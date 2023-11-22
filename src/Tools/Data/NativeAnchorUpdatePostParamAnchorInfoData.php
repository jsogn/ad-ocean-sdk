<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 锚点信息
class NativeAnchorUpdatePostParamAnchorInfoData extends Data
{

    /**
     * @var string $anchor_type 更新的锚点类型 可选值:
     */
    public string $anchor_type;
    
    /**
     * @var string $anchor_id 待更新的锚点id
     */
    public string $anchor_id;
    
    /**
     * @var string $tool_title 锚点工具名称（名称用于您自己管理组件，不会对外显示）
     */
    public string $tool_title;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoGameAnchorData $game_anchor 游戏锚点，当需要更新的锚点类型为anchor_type=APP_GAME: 应用下载-游戏锚点时必填
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoGameAnchorData $game_anchor;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorData $app_ecommerce_anchor 电商下载锚点，当anchor_type=APP_SHOP: 电商锚点时必填
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorData $app_ecommerce_anchor;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoNetServiceAnchorData $net_service_anchor 网服下载锚点，当anchor_type=APP_INTERNET_SERVICE时必填
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoNetServiceAnchorData $net_service_anchor;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoShoppingCartAnchorData $shopping_cart_anchor 购物车锚点，当anchor_type=SHOPPING_CART：购物锚点时必填
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoShoppingCartAnchorData $shopping_cart_anchor;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoPrivateChatData $private_chat 咨询锚点，当anchor_type=PRIVATE_CHAT必填
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoPrivateChatData $private_chat;
    
}