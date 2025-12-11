<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图文信息
class CarouselCreatePostResponseCarouselData extends Data
{

    /**
     * @var int $carousel_id 图文id
     */
    public int $carousel_id;
    
    /**
     * @var string $uri 图文uri
     */
    public string $uri;
    
    /**
     * @var int $carousel_type 图文素材类型
     */
    public int $carousel_type;
    
    /**
     * @var array<\AdOceanSdk\File\Data\CarouselCreatePostResponseCarouselImagesData> $images 图片信息
     */
    public array $images;
    
    /**
     * @var array<\AdOceanSdk\File\Data\CarouselCreatePostResponseCarouselAudioData> $audio 音频信息
     */
    public array $audio;
    
    /**
     * @var string $file_name 图文标题
     */
    public string $file_name;
    
}