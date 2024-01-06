<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 项目列表
class PromotionListGetResponseListData extends Data
{

    /**
     * @var int $promotion_id 广告ID
     */
    public int $promotion_id;
    
    /**
     * @var int $promotion_name 广告名称
     */
    public int $promotion_name;
    
    /**
     * @var int $project_id 项目ID
     */
    public int $project_id;
    
    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var string $promotion_create_time 广告创建时间，格式yyyy-MM-dd HH:mm:ss
     */
    public string $promotion_create_time;
    
    /**
     * @var string $promotion_modify_time 广告更新时间，格式yyyy-MM-dd HH:mm:ss
     */
    public string $promotion_modify_time;
    
    /**
     * @var string $learning_phase 学习期状态，枚举值：DEFAULT（默认，不在学习期中）、LEARNING（学习中）、LEARNED（学习成功）、LEARN_FAILED（学习失败)
     */
    public string $learning_phase;
    
    /**
     * @var string $status 广告状态，枚举值：NOT_DELETED不限 、ALL不限（包含已删除）、OK投放中、DELETED已删除、PROJECT_OFFLINE_BUDGET项目超出预算、PROJECT_PREOFFLINE_BUDGET项目接近预算、TIME_NO_REACH未到达投放时间、TIME_DONE已完成、NO_SCHEDULE不在投放时段、AUDIT新建审核中、REAUDIT修改审核中、FROZEN已终止、AUDIT_DENY审核不通过、OFFLINE_BUDGET广告超出预算、OFFLINE_BALANCE账户余额不足、PREOFFLINE_BUDGET广告接近预算、DISABLED已暂停、PROJECT_DISABLED已被项目暂停、LIVE_ROOM_OFF关联直播间不可投、PRODUCT_OFFLINE关联商品不可投，、AWEME_ACCOUNT_DISABLED关联抖音账号不可投、AWEME_ANCHOR_DISABLED锚点不可投、DISABLE_BY_QUOTA已暂停（配额达限）、CREATE新建、ADVERTISER_OFFLINE_BUDGET账号超出预算、ADVERTISER_PREOFFLINE_BUDGET账号接近预算
     */
    public string $status;
    
    /**
     * @var string $status_first 广告一级状态
     */
    public string $status_first;
    
    /**
     * @var array<string> $status_second 广告二级状态
     */
    public array $status_second;
    
    /**
     * @var string $opt_status 操作状态
     */
    public string $opt_status;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionListGetResponseListNativeSettingData $native_setting 原生广告设置
     */
    public \AdOceanSdk\Advertising\Data\PromotionListGetResponseListNativeSettingData $native_setting;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsData $promotion_materials 广告素材组合
     */
    public \AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsData $promotion_materials;
    
    /**
     * @var string $source 广告来源
     */
    public string $source;
    
    /**
     * @var string $is_comment_disable 广告评论，ON为启用，OFF为不启用
     */
    public string $is_comment_disable;
    
    /**
     * @var string $ad_download_status 客户端下载视频功能，ON为启用，OFF为不启用
     */
    public string $ad_download_status;
    
    /**
     * @var string $materials_type 素材类型
     */
    public string $materials_type;
    
    /**
     * @var int $budget 预算
     */
    public int $budget;
    
    /**
     * @var string $budget_mode 预算类型
     */
    public string $budget_mode;
    
    /**
     * @var int $bid 点击出价/展示出价
     */
    public int $bid;
    
    /**
     * @var int $cpa_bid 目标转化出价/预期成本
     */
    public int $cpa_bid;
    
    /**
     * @var int $deep_cpabid 深度优化出价
     */
    public int $deep_cpabid;
    
    /**
     * @var int $roi_goal 深度转化ROI系数
     */
    public int $roi_goal;
    
    /**
     * @var int $union_bid_ratio 穿山甲系数，为投放到穿山甲的广告设置出价系数，只支持精度为小数点后2位，范围[0.3，3]
     */
    public int $union_bid_ratio;
    
    /**
     * @var int $union_bid 穿山甲出价，穿山甲出价=穿山甲系数*出价
     */
    public int $union_bid;
    
    /**
     * @var int $union_cpa_bid 穿山甲出价，穿山甲目标转化出价=穿山甲系数*目标转化出价
     */
    public int $union_cpa_bid;
    
    /**
     * @var int $union_deep_cpa_bid 穿山甲深度出价，穿山甲深度出价=深度出价*穿山甲系数
     */
    public int $union_deep_cpa_bid;
    
    /**
     * @var int $union_roi_goal 穿山甲ROI系数，穿山甲ROI系数=ROI系数 * 穿山甲系数
     */
    public int $union_roi_goal;
    
    /**
     * @var string $schedule_time 广告的投放时段
     */
    public string $schedule_time;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionListGetResponseListMaterialScoreInfoData $material_score_info 素材评级信息
     */
    public \AdOceanSdk\Advertising\Data\PromotionListGetResponseListMaterialScoreInfoData $material_score_info;
    
    /**
     * @var string $creative_auto_generate_switch 是否开启自动生成素材
     */
    public string $creative_auto_generate_switch;
    
    /**
     * @var int $config_id 配置ID
     */
    public int $config_id;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionListGetResponseListBrandInfoData $brand_info 品牌信息
     */
    public \AdOceanSdk\Advertising\Data\PromotionListGetResponseListBrandInfoData $brand_info;
    
}