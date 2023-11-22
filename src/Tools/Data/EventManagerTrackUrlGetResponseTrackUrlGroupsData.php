<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 监测链接组信息
class EventManagerTrackUrlGetResponseTrackUrlGroupsData extends Data
{

    /**
     * @var string $download_url 应用下载链接，当资产类型为应用时返回
     */
    public string $download_url;
    
    /**
     * @var string $action_track_url 点击（监测链接）只允许传入1个
     */
    public string $action_track_url;
    
    /**
     * @var string $track_url 展示（监测链接）
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
     * @var int $track_url_group_id 监测链接组ID
     */
    public int $track_url_group_id;
    
    /**
     * @var string $track_url_group_name 监测链接组名称
     */
    public string $track_url_group_name;
    
    /**
     * @var  $active_track_url 
     */
    public  $active_track_url;
    
}