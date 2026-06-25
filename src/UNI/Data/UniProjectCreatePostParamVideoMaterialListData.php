<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频素材信息，单剧目在创建时最多设置视频素材 200 个如需上传更多视频素材，可通过【批量添加项目下素材】接口追投
class UniProjectCreatePostParamVideoMaterialListData extends Data
{

    /**
     * @var string $image_mode 视频素材类型，允许值：CREATIVE_IMAGE_MODE_VIDEO_VERTICAL 竖版视频CREATIVE_IMAGE_MODE_VIDEO 横版视频
     */
    public string $image_mode;

    /**
     * @var string $video_id 视频ID，可通过【获取视频素材】或【获取账户可用的组织视频列表】获得
     */
    public string $video_id;

    /**
     * @var string $video_cover_id 视频封面图片ID，可通过【获取图片素材】接口获得
     */
    public string $video_cover_id;

    /**
     * @var int $item_id 注：当aweme_id传入时有效抖音短视频ID，通过【获取抖音主页视频】或 【获取抖音授权关系】获取主页视频或合作授权视频
     */
    public int $item_id;

    /**
     * @var string $video_hp_visibility 视频素材主页可见性设置，该参数只针对非抖音视频生效可选值:ALWAYS_VISIBLE 主页始终可见HIDE_VIDEO_ON_HP 仅单次展示可见（默认值）
     */
    public string $video_hp_visibility;

}