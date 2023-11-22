<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 项目列表
class ProjectListGetResponseListData extends Data
{

    /**
     * @var int $project_id 项目ID
     */
    public int $project_id;
    
    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var string $delivery_mode 投放模式，允许值：MANUAL手动投放、PROCEDURAL自动投放
     */
    public string $delivery_mode;
    
    /**
     * @var string $landing_type 推广目的，枚举值：APP应用推广、LINK销售线索推广、MICRO_GAME小程序、QUICK_APP快应用
     */
    public string $landing_type;
    
    /**
     * @var string $app_promotion_type 子目标，枚举值：DOWNLOAD应用下载、LAUNCH应用调用、RESERVE预约下载
     */
    public string $app_promotion_type;
    
    /**
     * @var string $marketing_goal 营销场景，枚举值：VIDEO_AND_IMAGE短视频/图片、LIVE直播
     */
    public string $marketing_goal;
    
    /**
     * @var string $ad_type 广告类型，枚举值：ALL所有广告，SEARCH 搜索广告
     */
    public string $ad_type;
    
    /**
     * @var string $opt_status 目标操作，枚举值：ENABLE启用项目、DISABLE暂停项目。
     */
    public string $opt_status;
    
    /**
     * @var string $name 项目名称
     */
    public string $name;
    
    /**
     * @var string $project_create_time 项目创建时间，格式yyyy-MM-dd HH:mm:ss
     */
    public string $project_create_time;
    
    /**
     * @var string $project_modify_time 项目更新时间，格式yyyy-MM-dd HH:mm:ss
     */
    public string $project_modify_time;
    
    /**
     * @var string $status 项目状态
     */
    public string $status;
    
    /**
     * @var string $status_first 项目一级状态
     */
    public string $status_first;
    
    /**
     * @var array<string> $status_second 项目二级状态
     */
    public array $status_second;
    
    /**
     * @var string $pricing 出价方式
     */
    public string $pricing;
    
    /**
     * @var string $package_name 应用包名
     */
    public string $package_name;
    
    /**
     * @var string $app_name 应用名
     */
    public string $app_name;
    
    /**
     * @var string $feed_delivery_search 搜索快投关键词功能，HAS_OPEN:启用，DISABLED:未启用
     */
    public string $feed_delivery_search;
    
    /**
     * @var float $search_bid_ratio 出价系数
     */
    public float $search_bid_ratio;
    
    /**
     * @var string $audience_extend 定向拓展
     */
    public string $audience_extend;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectListGetResponseListKeywordsData> $keywords 搜索关键词列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\ProjectListGetResponseListKeywordsData::class)]
    public array $keywords;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectListGetResponseListRelatedProductData $related_product 关联产品投放相关
     */
    public \AdOceanSdk\Advertising\Data\ProjectListGetResponseListRelatedProductData $related_product;
    
    /**
     * @var array<int> $dpa_categories 商品投放范围
     */
    public array $dpa_categories;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectListGetResponseListDpaProductTargetData> $dpa_product_target 自定义筛选条件（商品投放条件）
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\ProjectListGetResponseListDpaProductTargetData::class)]
    public array $dpa_product_target;
    
    /**
     * @var string $dpa_adtype DPA广告类型
     */
    public string $dpa_adtype;
    
    /**
     * @var string $download_url 下载链接
     */
    public string $download_url;
    
    /**
     * @var string $download_type 下载方式，枚举值：DOWNLOAD_URL直接下载、EXTERNAL_URL落地页下载
     */
    public string $download_type;
    
    /**
     * @var string $download_mode 优先从系统应用商店下载（下载模式），枚举值：APP_STORE_DELIVERY优先商店下载、DEFAULT默认下载
     */
    public string $download_mode;
    
    /**
     * @var string $launch_type 调起方式，枚举值：DIRECT_OPEN直接调起、EXTERNAL_OPEN落地页调起
     */
    public string $launch_type;
    
    /**
     * @var string $promotion_type 投放内容，允许值：AWEME_HOME_PAGE抖音主页、LANDING_PAGE_LINK落地页
     */
    public string $promotion_type;
    
    /**
     * @var string $open_url Deeplink直达链接
     */
    public string $open_url;
    
    /**
     * @var string $ulink_url ulink直达链接
     */
    public string $ulink_url;
    
    /**
     * @var string $subscribe_url 预约下载链接
     */
    public string $subscribe_url;
    
    /**
     * @var string $asset_type 资产类型，允许值：ORANGE橙子落地页、THIRDPARTY自研落地页、ENTERPRISE 企业号落地页、AWEME_HOME_PAGE 抖音主页、MICRO_APP字节小程序、WECHAT_APPLET微信小程序
     */
    public string $asset_type;
    
    /**
     * @var string $micro_promotion_type 小程序类型，允许值：BYTE_APP字节小程序、BYTE_GAME字节小游戏、WECHAT_APP 微信小程序、WECHAT_GAME 微信小游戏
     */
    public string $micro_promotion_type;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectListGetResponseListOptimizeGoalData $optimize_goal 优化目标
     */
    public \AdOceanSdk\Advertising\Data\ProjectListGetResponseListOptimizeGoalData $optimize_goal;
    
    /**
     * @var int $landing_page_stay_time 店铺停留时长，单位为毫秒
     */
    public int $landing_page_stay_time;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectListGetResponseListDeliveryRangeData $delivery_range 广告版位
     */
    public \AdOceanSdk\Advertising\Data\ProjectListGetResponseListDeliveryRangeData $delivery_range;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectListGetResponseListAudienceData $audience 定向设置
     */
    public \AdOceanSdk\Advertising\Data\ProjectListGetResponseListAudienceData $audience;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectListGetResponseListDeliverySettingData $delivery_setting 投放设置
     */
    public \AdOceanSdk\Advertising\Data\ProjectListGetResponseListDeliverySettingData $delivery_setting;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectListGetResponseListTrackUrlSettingData $track_url_setting 监测链接设置
     */
    public \AdOceanSdk\Advertising\Data\ProjectListGetResponseListTrackUrlSettingData $track_url_setting;
    
    /**
     * @var string $open_url_type 直达链接类型
     */
    public string $open_url_type;
    
    /**
     * @var string $open_url_field 直达链接字段选择
     */
    public string $open_url_field;
    
    /**
     * @var string $open_url_params 直达链接检测参数
     */
    public string $open_url_params;
    
    /**
     * @var int $budget_group_id 项目关联的预算组ID，一个项目只能关联一个预算组
     */
    public int $budget_group_id;
    
}