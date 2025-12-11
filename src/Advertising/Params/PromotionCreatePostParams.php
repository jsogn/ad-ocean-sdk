<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class PromotionCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var int $project_id 项目ID
     */
    public int $project_id;
    
    /**
     * @var string $name 广告名称，长度是1-50个字（两个英文字符占1个字）。名称不可重复，否则会报错
     */
    public string $name;
    
    /**
     * @var string $operation 广告状态， 允许值:ENABLE开启(默认值）、DISABLE关闭
     */
    public string $operation;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsData $promotion_materials 广告素材组合
     */
    public \AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsData $promotion_materials;
    
    /**
     * @var string $materials_type 素材类型，直播场景必填，
     */
    public string $materials_type;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionCreatePostParamNativeSettingData $native_setting 原生广告设置
     */
    public \AdOceanSdk\Advertising\Data\PromotionCreatePostParamNativeSettingData $native_setting;
    
    /**
     * @var string $source 广告来源，字数限制：[2-10]（英文字符限制：[4-20]）当landing_type =LINK、MICRO_GAME、SHOP、QUICK_APP
     */
    public string $source;
    
    /**
     * @var string $is_comment_disable 广告评论，ON为启用，OFF为不启用，默认值：ON允许值:ON、OFF注：nventory_type 仅包含INVENTORY_UNION_SLOT（穿山甲）时，不支持广告评论
     */
    public string $is_comment_disable;
    
    /**
     * @var string $ad_download_status 客户端下载视频功能，ON为启用，OFF为不启用，默认值：OFF允许值:ON、OFF若关闭，用户则无法下载您本地上传的视频，该设置在广告投放后无法修改注：仅支持账户信息推广身份（aweme_id传入时，ad_download_status传入无效）；nventory_type 仅包含INVENTORY_UNION_SLOT（穿山甲）时，不支持广告评论
     */
    public string $ad_download_status;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionCreatePostParamBrandInfoData $brand_info 品牌信息（仅关联云图和cdp的广告主可以按需填写品牌及所属类别信息）
     */
    public \AdOceanSdk\Advertising\Data\PromotionCreatePostParamBrandInfoData $brand_info;
    
    /**
     * @var string $budget_mode 预算类型(创建后不可修改), 允许值:BUDGET_MODE_DAY日预算（默认值）,BUDGET_MODE_TOTAL总预算
     */
    public string $budget_mode;
    
    /**
     * @var float $budget 预算（元），
     */
    public float $budget;
    
    /**
     * @var float $bid 点击出价/展示出价，当pricing为CPC、CPM出价方式时必填，
     */
    public float $bid;
    
    /**
     * @var float $cpa_bid 目标转化出价/预期成本，
     */
    public float $cpa_bid;
    
    /**
     * @var float $deep_cpabid 深度优化出价，deep_bid_type =DEEP_BID_MIN时必填，deep_external_action = AD_CONVERT_TYPE_PHONE_CONNECT时必填;
     */
    public float $deep_cpabid;
    
    /**
     * @var float $roi_goal 深度转化ROI系数, 范围(0,5]，精度：保留小数点后四位，当 deep_bid_type =ROI_COEFFICIENT时必填
     */
    public float $roi_goal;
    
    /**
     * @var int $union_bid_ratio 穿山甲系数，为投放到穿山甲的广告设置出价系数，只支持精度为小数点后2位，范围[0.3，3]
     */
    public int $union_bid_ratio;
    
    /**
     * @var string $auto_extend_traffic 智能拓流
     */
    public string $auto_extend_traffic;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionCreatePostParamKeywordsData> $keywords 关键词列表，关键词和智能拓流二者必须开启一个，一个广告最多可添加1000个
     */
    public array $keywords;
    
}