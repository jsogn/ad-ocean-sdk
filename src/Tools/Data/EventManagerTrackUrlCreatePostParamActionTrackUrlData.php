<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 点击（监测链接），只允许传入1个
class EventManagerTrackUrlCreatePostParamActionTrackUrlData extends Data
{

    /**
     * @var string $track_url 展示（监测链接），只允许传入1个
     */
    public string $track_url;
    
    /**
     * @var string $video_play_track_url 视频播放（监测链接），只允许传入1个
     */
    public string $video_play_track_url;
    
    /**
     * @var string $video_play_done_track_url 视频播完（监测链接），只允许传入1个
     */
    public string $video_play_done_track_url;
    
    /**
     * @var string $video_play_effective_track_url 视频有效播放（监测链接），只允许传入1个
     */
    public string $video_play_effective_track_url;
    
    /**
     * @var string $track_url_group_name 监测链接组名称，应用型资产必填
     */
    public string $track_url_group_name;
    
    /**
     * @var string $active_track_url 激活监测
     */
    public string $active_track_url;
    
}