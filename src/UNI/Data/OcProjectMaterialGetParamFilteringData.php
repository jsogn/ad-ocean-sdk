<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤器
class OcProjectMaterialGetParamFilteringData extends Data
{

    /**
     * @var string $material_type 素材类型，可选值，单次仅支持传入一个:VIDEO 视频TITLE 标题IMAGE 图片CAROUSEL 图文TRIAL_PLAY_MATERIAL试玩素材OTHER 其他素材类型（包括产品信息、短剧专辑链接、落地页、行动号召等）
     */
    public string $material_type;

    /**
     * @var string $search_keyword 搜索关键词，支持根据视频mid进行搜索，当且仅当material_type=VIDEO 视频、IMAGE 图片、CAROUSEL 图文时支持传入
     */
    public string $search_keyword;

    /**
     * @var string $material_status_first 可选值: STATUS_DELETE 已删除STATUS_DISABLE 未投放STATUS_FROZEN 已终止STATUS_OK 投放中STATUS_TIME_DONE 已完成
     */
    public string $material_status_first;

    /**
     * @var string $material_status_second 素材二级状态过滤，可选值：MATERIAL_STATUS_OFFLINE_AUDIT审核不通过     MATERIAL_STATUS_AUDIT新建审核中 MATERIAL_STATUS_DISABLE手动暂停 MATERIAL_STATUS_PROCEDURAL_DISABLE系统暂停 DOUYIN_ITEM_NOT_AVAILABLE_FOR_DELIVERY关联抖音视频不可投 GUIDE_VIDEO_NOT_EXIST引导视频不存在
     */
    public string $material_status_second;

}