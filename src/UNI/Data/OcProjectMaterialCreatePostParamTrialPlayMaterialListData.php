<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 试玩素材信息
class OcProjectMaterialCreatePostParamTrialPlayMaterialListData extends Data
{

    /**
     * @var string $app_play_uri 试玩素材uri，可通过【获取试玩/直玩素材列表】获取可用于创编的素材
     */
    public string $app_play_uri;

    /**
     * @var string $guide_video_id 通过【上传视频】接口上传引导视频，获取引导视频的video_id引导视频ID，引导视频时长≥5s，文件≤100M
     */
    public string $guide_video_id;

}