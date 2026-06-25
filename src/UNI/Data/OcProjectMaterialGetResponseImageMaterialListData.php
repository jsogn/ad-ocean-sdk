<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片素材信息
class OcProjectMaterialGetResponseImageMaterialListData extends Data
{

    /**
     * @var string $image_mode 素材类型，可选值: CREATIVE_IMAGE_MODE_LARGE CREATIVE_IMAGE_MODE_LARGE_VERTICAL 大图竖版图CREATIVE_IMAGE_MODE_SMALL SEARCH_AD_SMALL_IMAGE 搜索小图TOUTIAO_SEARCH_AD_IMAGE 搜索大图
     */
    public string $image_mode;

    /**
     * @var array<string> $image_ids 图片id
     */
    public array $image_ids;

    /**
     * @var int $material_id 素材id
     */
    public int $material_id;

    /**
     * @var string $material_status_frist 素材一级状态，可选值: STATUS_DELETE 已删除STATUS_DISABLE 未投放STATUS_FROZEN 已终止STATUS_OK 投放中STATUS_TIME_DONE 已完成
     */
    public string $material_status_frist;

    /**
     * @var array<string> $material_status_second 素材二级状态，可选值：PROJECT_STATUS_DELETE  项目已删除MATERIAL_STATUS_DELETE 素材已删除PROJECT_STATUS_FROZEN 项目已终止MATERIAL_STATUS_FROZEN 素材已终止 MATERIAL_STATUS_OFFLINE_AUDIT 审核不通过 MATERIAL_STATUS_AUDIT 新建审核中MATERIAL_STATUS_DISABLE 手动暂停MATERIAL_STATUS_PROCEDURAL_DISABLE 系统暂停DOUYIN_ITEM_NOT_AVAILABLE_FOR_DELIVERY 关联抖音视频不可投         GUIDE_VIDEO_NOT_EXIST 引导视频不存在       MATERIAL_STATUS_PROJECT_DISABLE 项目已暂停 LACK_BASIC_MATERIAL_STATUS项目素材待补充        PROJECT_STATUS_AUDIT 项目新建审核中     PROJECT_STATUS_REAUDIT 项目修改审核中     PROJECT_AUDIT_REJECTED 项目审核不通过     MATERIAL_STATUS_OFFLINE_BALANCE 账户余额不足 MATERIAL_STATUS_OFFLINE_BUDGET 账户超出预算 SHARED_WALLET_EXCEEDS_BUDGET 共享钱包超出预算 MATERIAL_STATUS_PROJECT_OFFLINE_BUDGET 项目超出预算 MATERIAL_STATUS_TIME_NO_REACH  项目未达投放时间  PROJECT_REACHED_DELIVERY_DURATION 项目已达投放时长 MATERIAL_STATUS_NO_SCHEDULE 项目不在投放时段  LIVE_ROOM_NOT_AVAILABLE_FOR_DELIVERY 关联直播间不可投  MATERIAL_STATUS_PRODUCT_OFFLINE 商品不可投放 APP_NOT_AVAILABLE_FOR_DELIVERY 应用不可投    ACCOUNT_AVATAR_NOT_AVAILABLE_FOR_DELIVERY 账户头像不可投        MATERIAL_STATUS_AWEME_ACCOUNT_OFFLINE 抖音账号不可投放
     */
    public array $material_status_second;

}