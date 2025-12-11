<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class ProjectCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var string $operation 计划状态，允许值:ENABLE开启（默认值）,DISABLE关闭
     */
    public string $operation;
    
    /**
     * @var string $delivery_mode 投放模式，允许值：
     */
    public string $delivery_mode;
    
    /**
     * @var string $landing_type 推广目的，允许值：APP应用推广、LINK销售线索推广、MICRO_GAME小程序、SHOP电商店铺推广、QUICK_APP快应用、NATIVE_ACTION 原生互动、DPA商品目录
     */
    public string $landing_type;
    
    /**
     * @var string $app_promotion_type 子目标，当 landing_type =APP有效且必填允许值：DOWNLOAD应用下载、LAUNCH应用调起、RESERVE预约下载
     */
    public string $app_promotion_type;
    
    /**
     * @var string $marketing_goal 营销场景，允许值：VIDEO_AND_IMAGE短视频/图片，LIVE直播。
     */
    public string $marketing_goal;
    
    /**
     * @var string $ad_type 广告类型，允许值：ALL通投广告SEARCH 搜索广告
     */
    public string $ad_type;
    
    /**
     * @var string $name 项目名称，长度是1-50个字（两个英文字符占1个字）
     */
    public string $name;
    
    /**
     * @var int $budget_group_id 预算组ID，一个项目一生只能被一个预算组关联，项目绑定预算组ID后，不允许修改。如果预算组被删除，绑定该预算组的项目也不能再绑定新的预算组。
     */
    public int $budget_group_id;
    
    /**
     * @var float $search_bid_ratio 出价系数，出价系数可通过【获取快投推荐出价系数】查询，小数点后最多两位,取值范围 [1.00,2.00]
     */
    public float $search_bid_ratio;
    
    /**
     * @var string $audience_extend 定向拓展，允许值：ON:开启（默认值），OFF:关闭
     */
    public string $audience_extend;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectCreatePostParamKeywordsData> $keywords 待添加搜索关键词列表，一个项目最多可添加1000个
     */
    public array $keywords;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectCreatePostParamRelatedProductData $related_product 关联产品投放相关参数
     */
    public \AdOceanSdk\Advertising\Data\ProjectCreatePostParamRelatedProductData $related_product;
    
    /**
     * @var string $download_url 下载链接，landing_type=APP子目标为DOWNLOAD或者LAUNCH 或者dpa_adtype = DPA_APP时有效且必填-下载、调用场景传入说明：IOS：需要为iTunes官方地址Android：需要为「应用管理中心」提供的下载链接，获取下载链接可参考【应用管理】
     */
    public string $download_url;
    
    /**
     * @var string $download_type 
     */
    public string $download_type;
    
    /**
     * @var string $download_mode 优先从系统应用商店下载（下载模式），landing_type=APP子目标为DOWNLOAD /LAUNCH 时有效允许值：APP_STORE_DELIVERY优先商店下载、DEFAULT默认下载（默认值）仅安卓应用下载支持，请确保投放的应用在应用商店内已上架选择后，将优先跳转目标应用对应手机系统应用商店安装详情页，跳转失败则使用下载链接下载
     */
    public string $download_mode;
    
    /**
     * @var int $quick_app_id 快应用资产id ，从【查询快应用信息】接口获取，仅支持已通过审核的快应用资产
     */
    public int $quick_app_id;
    
    /**
     * @var string $launch_type 调起方式（仅对应应用推广目标下的应用调起方式，快应用调起方式请使用download_type参数）
     */
    public string $launch_type;
    
    /**
     * @var string $promotion_type 投放内容，允许值：AWEME_HOME_PAGE：抖音主页（默认）LANDING_PAGE_LINK：落地页
     */
    public string $promotion_type;
    
    /**
     * @var string $open_url Deeplink直达链接，landing_type =APP且子目标为LAUNCH时有效。直达链接仅支持部分App唤起（点击唤起APP），点击创意将优先跳转App，再根据投放内容跳转相关链接
     */
    public string $open_url;
    
    /**
     * @var string $open_url_type 直达链接类型，允许值: NONE不启用, DPA商品库所含链接, CUSTOM自定义链接
     */
    public string $open_url_type;
    
    /**
     * @var string $open_url_field 直达链接字段选择，当open_url_type为DPA必填
     */
    public string $open_url_field;
    
    /**
     * @var string $open_url_params 直达链接检测参数
     */
    public string $open_url_params;
    
    /**
     * @var string $ulink_url ulink直达链接，landing_type =APP且子目标为LAUNCH时有效仅支持穿山甲广告位
     */
    public string $ulink_url;
    
    /**
     * @var string $subscribe_url 预约下载链接，landing_type =APP且子目标为RESERVE时有效且必填
     */
    public string $subscribe_url;
    
    /**
     * @var string $asset_type 资产类型，landing_type =LINK或SHOP时有效且必填允许值：ORANGE橙子落地页、THIRDPARTY自研落地页
     */
    public string $asset_type;
    
    /**
     * @var string $micro_promotion_type 小程序类型，landing_type =MICRO_GAME时有效且必填允许值：WECHAT_GAME微信小游戏、WECHAT_APP微信小程序、BYTE_GAME字节小游戏、BYTE_APP字节小程序
     */
    public string $micro_promotion_type;
    
    /**
     * @var string $dpa_adtype  DPA广告类型，
     */
    public string $dpa_adtype ;
    
    /**
     * @var int $micro_app_instance_id 字节小程序/小游戏资产id，通过 工具-字节小程序 接口获取
     */
    public int $micro_app_instance_id;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectCreatePostParamOptimizeGoalData $optimize_goal 优化目标
     */
    public \AdOceanSdk\Advertising\Data\ProjectCreatePostParamOptimizeGoalData $optimize_goal;
    
    /**
     * @var string $value_optimized_type 目标优化类型，
     */
    public string $value_optimized_type;
    
    /**
     * @var int $landing_page_stay_time 店铺停留时长，单位为毫秒，当external_action为AD_CONVERT_TYPE_STAY_TIME时有效且必填允许值：1000、5000、12000、20000、30000、40000、50000、60000
     */
    public int $landing_page_stay_time;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectCreatePostParamDeliveryRangeData $delivery_range 广告版位
     */
    public \AdOceanSdk\Advertising\Data\ProjectCreatePostParamDeliveryRangeData $delivery_range;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectCreatePostParamAudienceData $audience 定向设置
     */
    public \AdOceanSdk\Advertising\Data\ProjectCreatePostParamAudienceData $audience;
    
    /**
     * @var array<int> $dpa_categories 商品投放范围，分类列表，由【DPA商品广告-获取DPA分类】 得到
     */
    public array $dpa_categories;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectCreatePostParamDpaProductTargetData> $dpa_product_target 自定义筛选条件（商品投放条件）。用于圈定商品投放范围，结合商品库字段搭配判断条件，圈定商品投放范围。获取商品库元信息-商品广告-商业开放平台
     */
    public array $dpa_product_target;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectCreatePostParamDeliverySettingData $delivery_setting 投放设置
     */
    public \AdOceanSdk\Advertising\Data\ProjectCreatePostParamDeliverySettingData $delivery_setting;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectCreatePostParamTrackUrlSettingData $track_url_setting 监测链接设置
     */
    public \AdOceanSdk\Advertising\Data\ProjectCreatePostParamTrackUrlSettingData $track_url_setting;
    
}