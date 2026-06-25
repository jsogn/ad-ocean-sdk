<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Params;

use AdOceanSdk\RequestParams;

class OcProjectMaterialCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 客户id
     */
    public int $advertiser_id;

    /**
     * @var int $project_id 项目id
     */
    public int $project_id;

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialCreatePostParamVideoMaterialListData> $video_material_list 视频素材信息，单次追投最多可添加200个素材（总素材量，包含视频、图片、图文）
     */
    public array $video_material_list;

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialCreatePostParamImageMaterialListData> $image_material_list 图片素材信息，，单次追投最多可添加200个素材
     */
    public array $image_material_list;

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialCreatePostParamCarouselMaterialListData> $carousel_material_list 图文素材信息
     */
    public array $carousel_material_list;

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialCreatePostParamTrialPlayMaterialListData> $trial_play_material_list 试玩素材信息
     */
    public array $trial_play_material_list;

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialCreatePostParamTitleMaterialListData> $title_material_list 标题信息
     */
    public array $title_material_list;

}