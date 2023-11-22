<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 音频信息
class CarouselListGetResponseCarouselsAudioData extends Data
{

    /**
     * @var string $video_id 音频id（旧版）（该字段将在12月19日下线，暂不对您的调用产生影响，请及时调整，使用下方audio_id）
     */
    public string $video_id;
    
    /**
     * @var string $url 音频地址（旧版）（该字段将在12月19日下线，暂不对您的调用产生影响，请及时调整，使用下方audio_url）
     */
    public string $url;
    
    /**
     * @var string $audio_id 音频id
     */
    public string $audio_id;
    
    /**
     * @var string $audio_url 音频地址
     */
    public string $audio_url;
    
}