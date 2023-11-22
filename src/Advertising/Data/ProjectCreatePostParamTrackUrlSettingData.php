<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 监测链接设置
class ProjectCreatePostParamTrackUrlSettingData extends Data
{

    /**
     * @var string $track_url_type 监测链接类型，区分使用监测链接组或者自定义链接允许值：CUSTOM自定义链接（默认值）、GROUP_ID监测链接组landing_type为LINK、landing_type=DPA且dpa_adtype=DPA_LINK、MICRO_GAME、SHOP和QUICK_APP/NATIVE_ACTION时，不支持传入，传入报错
     */
    public string $track_url_type;
    
    /**
     * @var int $track_url_group_id 监测链接组id，
     */
    public int $track_url_group_id;
    
    /**
     * @var array<string> $track_url 展示（监测链接），只允许传入1个，
     */
    public array $track_url;
    
    /**
     * @var array<string> $action_track_url 点击（监测链接），只允许传入1个，
     */
    public array $action_track_url;
    
    /**
     * @var array<string> $video_play_effective_track_url 视频有效播放（监测链接），只允许传入1个，
     */
    public array $video_play_effective_track_url;
    
    /**
     * @var array<string> $video_play_done_track_url 视频播完（监测链接），只允许传入1个
     */
    public array $video_play_done_track_url;
    
    /**
     * @var array<string> $video_play_first_track_url 视频开始播放（监测链接），只允许传入1个
     */
    public array $video_play_first_track_url;
    
    /**
     * @var string $send_type 数据发送方式，允许值：SERVER_SEND服务器端上传（默认值）,CLIENT_SEND客户端上传
     */
    public string $send_type;
    
}