<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 监测链接组ID
class EventManagerTrackUrlUpdatePostParamTrackUrlGroupIdData extends Data
{

    /**
     * @var string $track_url 展示（监测链接）
     */
    public string $track_url;
    
    /**
     * @var string $action_track_url 点击（监测链接）只允许传入1个
     */
    public string $action_track_url;
    
    /**
     * @var string $video_play_effective_track_url 视频有效播放（监测链接），只允许传入1个
     */
    public string $video_play_effective_track_url;
    
    /**
     * @var string $video_play_done_track_url 视频播完（监测链接），只允许传入1个
     */
    public string $video_play_done_track_url;
    
    /**
     * @var string $video_play_track_url 视频播放（监测链接），只允许传入1个
     */
    public string $video_play_track_url;
    
}