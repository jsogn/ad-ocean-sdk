<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 试玩素材信息
class OcProjectMaterialGetResponseTrialPlayMaterialListData extends Data
{

    /**
     * @var string $app_play_uri 试玩素材uri
     */
    public string $app_play_uri;

    /**
     * @var string $guide_video_id 引导视频ID
     */
    public string $guide_video_id;

    /**
     * @var string $image_mode 可选值: CREATIVE_IMAGE_MODE_TRIAL_PLAY_LARGE 试玩横屏CREATIVE_IMAGE_MODE_TRIAL_PLAY_VERTICAL 试玩竖屏
     */
    public string $image_mode;

    /**
     * @var string $app_play_version 试玩素材版本号
     */
    public string $app_play_version;

    /**
     * @var string $file_name 素材名称
     */
    public string $file_name;

    /**
     * @var int $material_id 素材id
     */
    public int $material_id;

    /**
     * @var string $material_opt_status 素材审核状态
     */
    public string $material_opt_status;

    /**
     * @var string $material_status 素材状态，可选值: MATERIAL_STATUS_ADV_OFFLINE_BUDGET MATERIAL_STATUS_ADV_PRE_OFFLINE_BUDGET MATERIAL_STATUS_AUDIT MATERIAL_STATUS_AVATAR_DISABLED 账户头像不可投MATERIAL_STATUS_AWEME_AC_DISABLED 抖音号不可投放MATERIAL_STATUS_AWEME_ANCHOR_DISABLED MATERIAL_STATUS_AWEME_VIDEO_DISABLED 抖音视频不可投放MATERIAL_STATUS_BUDGET_GROUP_OFFLINE_BUDGET 预算组超出预算MATERIAL_STATUS_DELETE MATERIAL_STATUS_DISABLE MATERIAL_STATUS_ERROR_DEFAULT MATERIAL_STATUS_FROZEN MATERIAL_STATUS_GUIDE_VIDEO_NOT_EXIST 引导视频不存在MATERIAL_STATUS_LIVE_ROOM_OFF MATERIAL_STATUS_MATERIAL_DELETE MATERIAL_STATUS_NO_SCHEDULE MATERIAL_STATUS_OFFLINE_AUDIT MATERIAL_STATUS_OFFLINE_BALANCE MATERIAL_STATUS_OFFLINE_BUDGET MATERIAL_STATUS_OK MATERIAL_STATUS_PREOFFLINE_BUGDET MATERIAL_STATUS_PREONLINE MATERIAL_STATUS_PRODUCT_OFFLINE MATERIAL_STATUS_PROJECT_DISABLE MATERIAL_STATUS_PROJECT_OFFLINE_BUDGET MATERIAL_STATUS_PROJECT_PREOFFLINE_BUDGET MATERIAL_STATUS_PROMOTION_DISABLE MATERIAL_STATUS_PROMOTION_QUOTA_LIMIT MATERIAL_STATUS_REAUDIT MATERIAL_STATUS_STAR_TASK_NOT_STARTED 星广联投任务未开始MATERIAL_STATUS_SYSTEM_DISABLE_QUOTA_LIMIT 素材排队中MATERIAL_STATUS_TIME_DONE MATERIAL_STATUS_TIME_NO_REACH MATERIAL_STATUS_VIDEO_NO_ADS
     */
    public string $material_status;

}