<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图文信息
class CarouselListGetResponseCarouselsData extends Data
{

    /**
     * @var int $id 图文id
     */
    public int $id;
    
    /**
     * @var string $carousel_type 可选值，枚举值：
     */
    public string $carousel_type;
    
    /**
     * @var array<\AdOceanSdk\File\Data\CarouselListGetResponseCarouselsImagesData> $images 图片信息
     */
    public array $images;
    
    /**
     * @var \AdOceanSdk\File\Data\CarouselListGetResponseCarouselsAudioData $audio 音频信息
     */
    public \AdOceanSdk\File\Data\CarouselListGetResponseCarouselsAudioData $audio;
    
    /**
     * @var string $file_name 图文标题
     */
    public string $file_name;
    
    /**
     * @var string $create_time 图文创建时间
     */
    public string $create_time;
    
    /**
     * @var string $update_time 图文上传时间
     */
    public string $update_time;
    
}