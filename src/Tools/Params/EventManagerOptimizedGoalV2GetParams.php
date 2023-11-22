<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class EventManagerOptimizedGoalV2GetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
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
     * @var string $marketing_goal 营销场景，允许值：VIDEO_AND_IMAGE短视频/图片,LIVE直播
     */
    public string $marketing_goal;
    
    /**
     * @var string $ad_type 广告类型，允许值：
     */
    public string $ad_type;
    
    /**
     * @var string $asset_type  资产类型，允许值：APP应用、QUICK_APP快应用、ORANGE橙子落地页、THIRDPARTY自研落地页、MINI_PROGRAM字节小程序ENTERPRISE 企业号落地页、WECHAT_APP微信小程序
     */
    public string $asset_type ;
    
    /**
     * @var string $mini_program_id 字节小程序资产id，当asset_type=MINI_PROGRAM时需传入
     */
    public string $mini_program_id;
    
    /**
     * @var string $quick_app_id 快应用id，当 landing_type =QUICK_APP时该字段必填
     */
    public string $quick_app_id;
    
    /**
     * @var int $asset_id 事件管理的资产id
     */
    public int $asset_id;
    
    /**
     * @var string $package_name 应用包名称，
     */
    public string $package_name;
    
    /**
     * @var string $app_type 应用类型，当 asset_type =APP时必填允许值：ANDROID、IOS
     */
    public string $app_type;
    
    /**
     * @var string $app_promotion_type 子目标，当 landing_type =APP时该字段必填，允许值：DOWNLOAD应用下载、LAUNCH应用调用、RESERVE预约下载
     */
    public string $app_promotion_type;
    
    /**
     * @var string $dpa_adtype dpa广告类型，允许值：1-应用下载DPA_APP、2-落地页DPA_LINK
     */
    public string $dpa_adtype;
    
}