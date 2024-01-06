<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class PromotionListGetParamFilteringData extends Data
{

    /**
     * @var array<int> $ids 按广告ID过滤，范围为1-20
     */
    public array $ids;
    
    /**
     * @var string $name 广告名称，长度是1-50个字（两个英文字符占1个字，该字段采取模糊查询的方式）
     */
    public string $name;
    
    /**
     * @var int $project_id 按项目id过滤
     */
    public int $project_id;
    
    /**
     * @var string $delivery_mode 投放模式，允许值：MANUAL手动投放 (默认值），PROCEDURAL自动投放
     */
    public string $delivery_mode;
    
    /**
     * @var string $status 广告状态过滤，允许值：NOT_DELETED不限 、ALL不限（包含已删除）、OK投放中、DELETED已删除、PROJECT_OFFLINE_BUDGET项目超出预算、PROJECT_PREOFFLINE_BUDGET项目接近预算、TIME_NO_REACH未到达投放时间、TIME_DONE已完成、NO_SCHEDULE不在投放时段、AUDIT新建审核中、REAUDIT修改审核中、FROZEN已终止、AUDIT_DENY审核不通过、OFFLINE_BUDGET广告超出预算、OFFLINE_BALANCE账户余额不足、PREOFFLINE_BUDGET广告接近预算、DISABLED已暂停、PROJECT_DISABLED已被项目暂停、LIVE_ROOM_OFF关联直播间不可投、PRODUCT_OFFLINE关联商品不可投，、AWEME_ACCOUNT_DISABLED关联抖音账号不可投、AWEME_ANCHOR_DISABLED锚点不可投、DISABLE_BY_QUOTA已暂停（配额达限）
     */
    public string $status;
    
    /**
     * @var string $status_first 广告一级状态过滤，不传默认返回不限（不含已删除）
     */
    public string $status_first;
    
    /**
     * @var string $status_second 广告二级状态过滤，当status_first = PROMOTION_STATUS_DISABLE时传入有效
     */
    public string $status_second;
    
    /**
     * @var string $promotion_create_time 广告创建时间，格式yyyy-mm-dd，表示过滤出当天创建的广告项目
     */
    public string $promotion_create_time;
    
    /**
     * @var string $promotion_modify_time 广告更新时间，格式yyyy-mm-dd，表示过滤出当天更新的广告项目
     */
    public string $promotion_modify_time;
    
    /**
     * @var string $reject_reason_type 审核建议类型，允许值：NONE无建议、REVIEW_REJECT审核不通过、LOW_MATERAIL低质素材、DISCOMFORT引人不适、QUALITY_POOR素材质量低、EXAGGERATION夸大宣传、ELSE其他
     */
    public string $reject_reason_type;
    
    /**
     * @var array<string> $learning_phase 学习期状态 允许值：LEARNING（学习期中）、LEARNED（学习期结束）、LEARN_FAILED（学习期失败)
     */
    public array $learning_phase;
    
}