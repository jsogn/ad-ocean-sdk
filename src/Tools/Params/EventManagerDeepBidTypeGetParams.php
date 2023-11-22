<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class EventManagerDeepBidTypeGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var string $delivery_mode 投放模式，允许值：MANUAL手动投放(默认值）、PROCEDURAL自动投放
     */
    public string $delivery_mode;
    
    /**
     * @var string $landing_type 推广目的，允许值：APP应用推广 、LINK销售线索收集、MICRO_GAME小程序、SHOP电商店铺、QUICK_APP快应用、NATIVE_ACTION原生互动、DPA商品目录
     */
    public string $landing_type;
    
    /**
     * @var int $asset_id 资产id
     */
    public int $asset_id;
    
    /**
     * @var string $external_action 优化目标
     */
    public string $external_action;
    
    /**
     * @var string $deep_external_action 深度优化目标，当优化目标不等于AD_CONVERT_TYPE_PAY时必填
     */
    public string $deep_external_action;
    
}