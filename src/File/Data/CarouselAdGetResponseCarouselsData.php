<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图文信息
class CarouselAdGetResponseCarouselsData extends Data
{

    /**
     * @var int $id 图文id
     */
    public int $id;
    
    /**
     * @var string $uri 图文uri
     */
    public string $uri;
    
    /**
     * @var int $carousel_type 图文素材类型
     */
    public int $carousel_type;
    
    /**
     * @var array<\AdOceanSdk\File\Data\CarouselAdGetResponseCarouselsImagesData> $images 图片信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\File\Data\CarouselAdGetResponseCarouselsImagesData::class)]
    public array $images;
    
    /**
     * @var array<\AdOceanSdk\File\Data\CarouselAdGetResponseCarouselsAudioData> $audio 音频信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\File\Data\CarouselAdGetResponseCarouselsAudioData::class)]
    public array $audio;
    
    /**
     * @var string $file_name 图文标题
     */
    public string $file_name;
    
}