<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件，若此字段不传，或传空则视为无限制条件
class ProjectListGetParamFilteringData extends Data
{

    /**
     * @var array<int> $ids 按广告项目ID过滤，范围为1-100
     */
    public array $ids;
    
    /**
     * @var string $delivery_mode 投放模式，允许值：MANUAL手动投放、PROCEDURAL自动投放
     */
    public string $delivery_mode;
    
    /**
     * @var string $landing_type 推广目的，允许值：
     */
    public string $landing_type;
    
    /**
     * @var string $app_promotion_type 子目标，允许值：
     */
    public string $app_promotion_type;
    
    /**
     * @var string $marketing_goal 营销场景，允许值：VIDEO_AND_IMAGE短视频/图片、LIVE直播
     */
    public string $marketing_goal;
    
    /**
     * @var string $ad_type 广告类型，允许值：ALL所有广告，SEARCH 搜索广告
     */
    public string $ad_type;
    
    /**
     * @var string $name 项目名称，长度是1-50个字
     */
    public string $name;
    
    /**
     * @var string $status 广告项目状态过滤，允许值：PROJECT_STATUS_ENABLE启用PROJECT_STATUS_DISABLE暂停PROJECT_STATUS_DELETE删除PROJECT_STATUS_ALL所有包含已删除PROJECT_STATUS_NOT_DELETE所有不包含已删除PROJECT_STATUS_BUDGET_EXCEED项目超出预算PROJECT_STATUS_BUDGET_PRE_OFFLINE_BUDGET项目接近预算PROJECT_STATUS_NOT_START未达投放时间PROJECT_STATUS_DONE已完成PROJECT_STATUS_NO_SCHEDULE不在投放时段
     */
    public string $status;
    
    /**
     * @var string $status_first 项目一级状态过滤，允许值：
     */
    public string $status_first;
    
    /**
     * @var string $status_second 项目二级状态过滤，允许值：
     */
    public string $status_second;
    
    /**
     * @var string $project_create_time 项目创建时间，格式yyyy-mm-dd，表示过滤出当天创建的广告项目
     */
    public string $project_create_time;
    
    /**
     * @var string $project_modify_time 项目更新时间，格式yyyy-mm-dd，表示过滤出当天更新的广告项目
     */
    public string $project_modify_time;
    
    /**
     * @var string $pricing 按计费方式过滤
     */
    public string $pricing;
    
    /**
     * @var string $inventory_type 按首选位置过滤，允许值INVENTORY_FEED今日头条INVENTORY_VIDEO_FEED西瓜视频INVENTORY_AWEME_FEED抖音短视频INVENTORY_TOMATO_NOVEL番茄小说INVENTORY_UNION_SLOT穿山甲UNION_BOUTIQUE_GAMEohayoo精品游戏
     */
    public string $inventory_type;
    
    /**
     * @var string $platform 按平台过滤，允许值：IOS、ANDROID
     */
    public string $platform;
    
    /**
     * @var int $budget_group_id 按预算组ID过滤，仅允许传入1个，该功能白名单开放，如需使用请联系销售
     */
    public int $budget_group_id;
    
}