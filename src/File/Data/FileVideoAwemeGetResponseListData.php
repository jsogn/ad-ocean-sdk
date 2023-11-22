<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 抖音视频列表
class FileVideoAwemeGetResponseListData extends Data
{

    /**
     * @var int $item_id 抖音视频ID
     */
    public int $item_id;
    
    /**
     * @var string $title 视频标题
     */
    public string $title;
    
    /**
     * @var string $video_id 视频ID
     */
    public string $video_id;
    
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
     * @var string $video_cover_url 视频封面链接，预览链接，有效期1小时
     */
    public string $video_cover_url;
    
    /**
     * @var string $image_mode 素材类型
     */
    public string $image_mode;
    
    /**
     * @var string $mid 素材ID
     */
    public string $mid;
    
}