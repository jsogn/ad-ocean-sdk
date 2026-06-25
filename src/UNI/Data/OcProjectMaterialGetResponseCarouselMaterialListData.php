<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图文素材信息
class OcProjectMaterialGetResponseCarouselMaterialListData extends Data
{

    /**
     * @var int $carousel_id 图文id
     */
    public int $carousel_id;

    /**
     * @var int $item_id 抖音主页图文id
     */
    public int $item_id;

    /**
     * @var string $video_hp_visibility 可选值: ALWAYS_VISIBLE 主页始终可见HIDE_VIDEO_ON_HP 主页隐藏 默认值: HIDE_VIDEO_ON_HP
     */
    public string $video_hp_visibility;

    /**
     * @var string $material_status_frist 可选值: STATUS_DELETE 已删除STATUS_DISABLE 未投放STATUS_FROZEN 已终止STATUS_OK 投放中STATUS_TIME_DONE 已完成
     */
    public string $material_status_frist;

    /**
     * @var array<string> $material_status_second 可选值: ACCOUNT_AVATAR_NOT_AVAILABLE_FOR_DELIVERY 账户头像不可投放ACCOUNT_EXCEEDS_BUDGET 账户超出预算ALL_KEYWORDS_DELETED 关键词均删除ALL_MATERIALS_DELETED 素材均删除APP_NOT_AVAILABLE_FOR_DELIVERY 应用不可投放AUDIT_REJECTED 审核不通过DOUYIN_ACCOUNT_NOT_AVAILABLE_FOR_DELIVERY 抖音账户不可投放GOODS_NOT_AVAILABLE_FOR_DELIVERY 商品不可投放LIVE_ROOM_NOT_AVAILABLE_FOR_DELIVERY 直播间不可投放LIVE_ROOM_NOT_STARTED 直播间未开播MANUAL_PAUSE 手动暂停MODIFY_AUDITING 修改审核中NEW_CREATED_AUDITING 新建审核中PAUSED 已暂停PROJECT_AUDIENCE_SETTING_CONFLICT 与项目定向设置冲突PROJECT_AUDIT_REJECTED 项目审核不通过PROJECT_BALANCE_INSUFFICIENT 项目余额不足PROJECT_COMPLETED 项目已完成PROJECT_DELETED 项目已删除PROJECT_EXCEEDS_BUDGET 项目超出预算PROJECT_MODIFY_AUDITING 项目修改审核中PROJECT_NEW_CREATED_AUDITING 项目新建审核中PROJECT_NOT_IN_DELIVERY_PERIOD 项目不在投放时段PROJECT_NOT_REACH_DELIVERY_TIME 项目未达投放时间PROJECT_PAUSED 项目已暂停PROJECT_REACHED_DELIVERY_DURATION 项目已达投放时长PROJECT_TERMINATED 项目已终止REACHED_REGULATION_BUDGET_UPPER_LIMIT 到达调控预算上限SHARED_WALLET_EXCEEDS_BUDGET 共享钱包超出预算TASK_BID_EXCEEDS_PROJECT_BUDGET 不满足出价或预算规则TASK_DELETED 任务已删除TASK_REACHED_REGULATION_DURATION 任务已达调控时长TASK_TERMINATED 任务已终止
     */
    public array $material_status_second;

}