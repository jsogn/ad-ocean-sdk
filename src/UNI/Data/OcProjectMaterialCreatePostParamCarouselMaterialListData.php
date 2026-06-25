<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图文素材信息
class OcProjectMaterialCreatePostParamCarouselMaterialListData extends Data
{

    /**
     * @var string $carousel_id 图文id，可通过【获取图文素材】接口获得
     */
    public string $carousel_id;

    /**
     * @var string $item_id 抖音图文id，需从【获取创编可用的抖音图文素材】接口获取item_id传入注意：投放抖音图文素材时，只需要传入item_id，不要传入carousel_id（2个同时传入只会使用item_id）
     */
    public string $item_id;

    /**
     * @var string $video_hp_visibility 抖音主页图文可见性，可选值: ALWAYS_VISIBLE 主页始终可见HIDE_VIDEO_ON_HP 主页隐藏
     */
    public string $video_hp_visibility;

}