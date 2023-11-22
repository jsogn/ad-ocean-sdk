<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 授权视频信息，若为单视频授权会返回
class ToolsAwemeAuthListGetResponseListVideoInfoData extends Data
{

    /**
     * @var int $item_id 抖音视频ID
     */
    public int $item_id;
    
    /**
     * @var string $image_mode 素材类型，枚举值：
     */
    public string $image_mode;
    
    /**
     * @var string $video_id 视频ID
     */
    public string $video_id;
    
    /**
     * @var string $title 视频名称
     */
    public string $title;
    
    /**
     * @var string $aweme_play_url 视频播放链接
     */
    public string $aweme_play_url;
    
    /**
     * @var float $duration 视频时长，单位为秒
     */
    public float $duration;
    
    /**
     * @var string $video_cover_id 视频封面ID
     */
    public string $video_cover_id;
    
    /**
     * @var string $video_cover_url 视频封面链接
     */
    public string $video_cover_url;
    
    /**
     * @var int $mid 素材ID
     */
    public int $mid;
    
}