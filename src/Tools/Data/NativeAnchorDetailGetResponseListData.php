<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 锚点详情列表
class NativeAnchorDetailGetResponseListData extends Data
{

    /**
     * @var string $anchor_id 锚点ID
     */
    public string $anchor_id;
    
    /**
     * @var string $anchor_type 锚点类型，可选值:
     */
    public string $anchor_type;
    
    /**
     * @var string $tool_title 锚点工具名称（名称用于您自己管理组件，不会对外显示）
     */
    public string $tool_title;
    
    /**
     * @var int $advertiser_id 广告主账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $create_time 锚点创建时间
     */
    public string $create_time;
    
    /**
     * @var string $modify_time 锚点更新时间
     */
    public string $modify_time;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListAppEcommerceAnchorData $app_ecommerce_anchor 电商下载锚点，当anchor_type=APP_SHOP时的详情
     */
    public ?\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListAppEcommerceAnchorData $app_ecommerce_anchor = null;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListNetServiceAnchorData $net_service_anchor 网服下载锚点，当anchor_type=APP_INTERNET_SERVICE时的详情
     */
    public ?\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListNetServiceAnchorData $net_service_anchor = null;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListGameAnchorData $game_anchor 游戏锚点，当需要更新的锚点类型为anchor_type=APP_GAME时返回
     */
    public ?\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListGameAnchorData $game_anchor = null;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListPrivateChatAnchorData $private_chat_anchor 咨询锚点，当anchor_type=PRIVATE_CHAT时返回的锚点
     */
    public ?\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListPrivateChatAnchorData $private_chat_anchor = null;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListShoppingCartAnchorData $shopping_cart_anchor 购物车锚点，当anchor_type=SHOPPING_CART：购物锚点时返回的详情
     */
    public ?\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListShoppingCartAnchorData $shopping_cart_anchor = null;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListInsuranceEnterpriseAnchorData $insurance_enterprise_anchor 外跳锚点，当anchor_type=INSURANCE时返回的详情
     */
    public ?\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListInsuranceEnterpriseAnchorData $insurance_enterprise_anchor = null;
    
}