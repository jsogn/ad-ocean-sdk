<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class OcProjectMaterialGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialGetResponseVideoMaterialListData> $video_material_list 视频素材信息
     */
    public array $video_material_list;

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialGetResponseImageMaterialListData> $image_material_list 图片素材信息
     */
    public array $image_material_list;

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialGetResponseCarouselMaterialListData> $carousel_material_list 图文素材信息
     */
    public array $carousel_material_list;

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialGetResponseTrialPlayMaterialListData> $trial_play_material_list 试玩素材信息
     */
    public array $trial_play_material_list;

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialGetResponseTitleMaterialListData> $title_material_list 标题素材信息
     */
    public array $title_material_list;

    /**
     * @var \AdOceanSdk\UNI\Data\OcProjectMaterialGetResponseProductInfoData $product_info 产品信息
     */
    public \AdOceanSdk\UNI\Data\OcProjectMaterialGetResponseProductInfoData $product_info;

    /**
     * @var array<string> $call_to_action_buttons 行动号召
     */
    public array $call_to_action_buttons;

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialGetResponsePlayletSeriesUrlInfoData> $playlet_series_url_info 短剧专辑链接信息
     */
    public array $playlet_series_url_info;

    /**
     * @var array<string> $external_url_material_list 普通落地页链接素材
     */
    public array $external_url_material_list;

    /**
     * @var array<string> $web_url_material_list 应用下载详情页
     */
    public array $web_url_material_list;

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialGetResponseComponentMaterialListData> $component_material_list 创意组件信息。数量上限为2
     */
    public array $component_material_list;

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialGetResponseAnchorMaterialListData> $anchor_material_list 原生锚点素材
     */
    public array $anchor_material_list;

    /**
     * @var string $anchor_related_type 可选值: AUTO 自动生成OFF 不启用SELECT 手动选择
     */
    public string $anchor_related_type;

    /**
     * @var string $open_url 直达链接
     */
    public string $open_url;

    /**
     * @var string $ulink_url_type 直达链接备用链接类型，可选值: UNIVERSAL_LINK APPLINK
     */
    public string $ulink_url_type;

    /**
     * @var string $ulink_url 直达链接备用链接
     */
    public string $ulink_url;

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;

}