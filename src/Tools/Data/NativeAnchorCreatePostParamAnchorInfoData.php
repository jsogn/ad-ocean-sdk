<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 原生锚点信息
class NativeAnchorCreatePostParamAnchorInfoData extends Data
{

    /**
     * @var string $anchor_type 锚点类型 可选值:
     */
    public string $anchor_type;
    
    /**
     * @var string $tool_title 锚点工具名称（名称用于您自己管理组件，不会对外显示）
     */
    public string $tool_title;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorCreatePostParamAnchorInfoAppEcommerceAnchorData $app_ecommerce_anchor 电商下载锚点，当anchor_type=APP_SHOP: 电商锚点时必填
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorCreatePostParamAnchorInfoAppEcommerceAnchorData $app_ecommerce_anchor;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorCreatePostParamAnchorInfoNetServiceAnchorData $net_service_anchor 网服下载锚点
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorCreatePostParamAnchorInfoNetServiceAnchorData $net_service_anchor;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorCreatePostParamAnchorInfoGameAnchorData $game_anchor 游戏锚点，当anchor_type=APP_GAME: 游戏锚点时必填
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorCreatePostParamAnchorInfoGameAnchorData $game_anchor;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorCreatePostParamAnchorInfoShoppingCartAnchorData $shopping_cart_anchor 购物锚点，当anchor_type=SHOPPING_CART：购物锚点时必填
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorCreatePostParamAnchorInfoShoppingCartAnchorData $shopping_cart_anchor;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorCreatePostParamAnchorInfoPrivateChatData $private_chat 咨询锚点，当anchor_type=PRIVATE_CHAT必填
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorCreatePostParamAnchorInfoPrivateChatData $private_chat;
    
}