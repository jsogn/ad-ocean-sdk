<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频素材信息
class OcProjectMaterialGetResponseVideoMaterialListData extends Data
{

    /**
     * @var string $video_id 视频id
     */
    public string $video_id;

    /**
     * @var string $video_cover_uri 视频封面图片ID
     */
    public string $video_cover_uri;

    /**
     * @var int $material_id 素材id
     */
    public int $material_id;

    /**
     * @var string $material_opt_status 视频素材操作状态，枚举值：DISABLE 暂停ENABLE 启用
     */
    public string $material_opt_status;

    /**
     * @var string $material_status_frist 可选值: STATUS_DELETE 已删除STATUS_DISABLE 未投放STATUS_FROZEN 已终止STATUS_OK 投放中STATUS_TIME_DONE 已完成
     */
    public string $material_status_frist;

    /**
     * @var array<string> $material_status_second 可选值: MATERIAL_STATUS_AUDIT 未投放-新建审核中MATERIAL_STATUS_AWEME_ACCOUNT_OFFLINE 抖音账号不可投放MATERIAL_STATUS_DELETE 已删除-素材已删除MATERIAL_STATUS_DISABLE 已暂停MATERIAL_STATUS_NO_SCHEDULE 不在投放时段MATERIAL_STATUS_OFFLINE_AUDIT 未投放-审核不通过MATERIAL_STATUS_OFFLINE_BALANCE 账户余额不足MATERIAL_STATUS_OFFLINE_BUDGET 账户超出预算MATERIAL_STATUS_PRODUCT_OFFLINE 商品不可投放MATERIAL_STATUS_PROJECT_DISABLE 项目已暂停MATERIAL_STATUS_PROJECT_OFFLINE_BUDGET 项目超出预算MATERIAL_STATUS_TIME_NO_REACH 未达投放时间PROJECT_STATUS_DELETE 已删除-项目已删除PROJECT_STATUS_FROZEN 已终止-项目已终止PROJECT_STATUS_REAUDIT 未投放-修改审核中
     */
    public array $material_status_second;

}