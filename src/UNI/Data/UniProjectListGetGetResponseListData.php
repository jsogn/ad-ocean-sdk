<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 项目列表
class UniProjectListGetGetResponseListData extends Data
{

    /**
     * @var int $project_id 项目id
     */
    public int $project_id;

    /**
     * @var int $advertiser_id 客户id
     */
    public int $advertiser_id;

    /**
     * @var string $name 项目名称
     */
    public string $name;

    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectListGetGetResponseListRelatedProductData $related_product 关联产品投放相关参数
     */
    public \AdOceanSdk\UNI\Data\UniProjectListGetGetResponseListRelatedProductData $related_product;

    /**
     * @var string $aweme_id 抖音号id
     */
    public string $aweme_id;

    /**
     * @var float $budget 项目预算，单位为元
     */
    public float $budget;

    /**
     * @var float $uni_roi_goal 全域ROI系数
     */
    public float $uni_roi_goal;

    /**
     * @var string $monetization_mode 投放变现模式，允许值：IAP用户付费IAA_AND_IAP混合变现
     */
    public string $monetization_mode;

    /**
     * @var string $schedule_type 投放时间类型，允许值： SCHEDULE_FROM_NOW从今天起长期投放 SCHEDULE_START_END设置开始和结束日期
     */
    public string $schedule_type;

    /**
     * @var string $start_time 投放起始时间
     */
    public string $start_time;

    /**
     * @var string $end_time 投放结束时间
     */
    public string $end_time;

    /**
     * @var string $schedule_time 投放时段
     */
    public string $schedule_time;

    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectListGetGetResponseListBrandInfoData $brand_info 品牌信息
     */
    public \AdOceanSdk\UNI\Data\UniProjectListGetGetResponseListBrandInfoData $brand_info;

    /**
     * @var string $aigc_dynamic_creative_switch 是否开启AIGC动态创意，允许值：OFF 关闭ON 开启
     */
    public string $aigc_dynamic_creative_switch;

    /**
     * @var string $status_first 项目一级状态，可选值: PROJECT_STATUS_DELETE 已删除PROJECT_STATUS_DISABLE 未投放PROJECT_STATUS_DONE 已完成PROJECT_STATUS_ENABLE 启用中PROJECT_STATUS_FROZEN 已终止
     */
    public string $status_first;

    /**
     * @var array<string> $status_second 项目二级状态，可选值: PROJECT_STATUS_ADV_OFFLINE_BUDGET 账户余额不足PROJECT_STATUS_AUDIT 新建审核中PROJECT_STATUS_AWEME_ACCOUNT_DISABLED 抖音账号不可投放PROJECT_STATUS_BUDGET_EXCEED 项目超出预算PROJECT_STATUS_NOT_START 未达投放时间PROJECT_STATUS_NO_SCHEDULE 不在投放时段PROJECT_STATUS_OFFLINE_AUDIT 审核不通过PROJECT_STATUS_OFFLINE_BUDGET 账户超预算PROJECT_STATUS_PRODUCT_OFFLINE 产品不可投放PROJECT_STATUS_REAUDIT 修改审核中PROJECT_STATUS_STOP 已暂停
     */
    public array $status_second;

    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectListGetGetResponseListAudienceData $audience 定向设置
     */
    public \AdOceanSdk\UNI\Data\UniProjectListGetGetResponseListAudienceData $audience;

}