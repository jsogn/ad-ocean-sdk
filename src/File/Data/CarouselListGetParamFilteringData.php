<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图文过滤信息
class CarouselListGetParamFilteringData extends Data
{

    /**
     * @var array<int> $carousel_ids 图文id
     */
    public array $carousel_ids;
    
    /**
     * @var string $file_name 文件名
     */
    public string $file_name;
    
    /**
     * @var array<string> $carousel_type 图文素材类型
     */
    public array $carousel_type;
    
    /**
     * @var array<string> $image_ids 图片id
     */
    public array $image_ids;
    
    /**
     * @var string $video_id 音频id（旧版）（该字段将在12月19日下线，暂不对您的调用产生影响，请及时调整，使用下方audio_id）
     */
    public string $video_id;
    
    /**
     * @var string $audio_id 音频id
     */
    public string $audio_id;
    
    /**
     * @var string $start_time 根据图文上传时间进行过滤的起始时间，与end_time搭配使用。
     */
    public string $start_time;
    
    /**
     * @var string $end_time 根据图文上传时间进行过滤的结束时间，与start_time搭配使用。
     */
    public string $end_time;
    
}