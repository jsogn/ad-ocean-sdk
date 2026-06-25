<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片素材信息，，单次追投最多可添加200个素材
class OcProjectMaterialCreatePostParamImageMaterialListData extends Data
{

    /**
     * @var string $image_mode 可选值: AWEME_PHOTO 图文素材CREATIVE_IMAGE_MODE_AWEME_LIVE 直播创意素材CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE 穿山甲免校验CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO 穿山甲免校验CREATIVE_IMAGE_MODE_DISPLAY_WINDOW 头条搜索投放通用橱窗样式CREATIVE_IMAGE_MODE_GIF CREATIVE_IMAGE_MODE_GROUP CREATIVE_IMAGE_MODE_INSTANT_PLAY 直玩CREATIVE_IMAGE_MODE_LARGE CREATIVE_IMAGE_MODE_LARGE_VERTICAL 大图竖版图CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL 试玩CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL 试玩CREATIVE_IMAGE_MODE_SMALL CREATIVE_IMAGE_MODE_TRIAL_PLAY_LARGE 试玩横屏CREATIVE_IMAGE_MODE_TRIAL_PLAY_VERTICAL 试玩竖屏CREATIVE_IMAGE_MODE_UNION_SPLASH 网盟开屏CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO 互动创意CREATIVE_IMAGE_MODE_VIDEO 视频CREATIVE_IMAGE_MODE_VIDEO_VERTICAL 抖音&火山竖版视频素材SEARCH_AD_SMALL_IMAGE 搜索小图TOUTIAO_SEARCH_AD_IMAGE 搜索大图
     */
    public string $image_mode;

    /**
     * @var string $images 图片ID
     */
    public string $images;

    /**
     * @var string $image_id 图片ID，可通过【获取图片素材】接口获得
     */
    public string $image_id;

}