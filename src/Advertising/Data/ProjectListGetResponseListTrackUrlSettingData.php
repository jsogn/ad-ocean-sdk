<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 监测链接设置
class ProjectListGetResponseListTrackUrlSettingData extends Data
{

    /**
     * @var string $track_url_type 监测链接类型，区分使用监测链接组或者自定义链接枚举值：CUSTOM自定义链接、GROUP_ID监测链接组
     */
    public string $track_url_type;

    /**
     * @var int $track_url_group_id 监测链接组id
     */
    public int $track_url_group_id;

    /**
     * @var array<string> $track_url 展示（监测链接）
     */
    public ?array $track_url;

    /**
     * @var array<string> $action_track_url 点击（监测链接）
     */
    public ?array $action_track_url;

    /**
     * @var array<string> $video_play_effective_track_url 视频有效播放（监测链接）
     */
    public ?array $video_play_effective_track_url;

    /**
     * @var array<string> $video_play_done_track_url 视频播完（监测链接）
     */
    public ?array $video_play_done_track_url;

    /**
     * @var array<string> $video_play_first_track_url 视频开始播放（监测链接）
     */
    public ?array $video_play_first_track_url;

    /**
     * @var string $send_type 数据发送方式，枚举值：SERVER_SEND服务器端上传,CLIENT_SEND客户端上传
     */
    public string $send_type;

}
