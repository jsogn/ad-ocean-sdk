<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CarouselCreatePostResponseData extends Data
{

    /**
     * @var \AdOceanSdk\File\Data\CarouselCreatePostResponseCarouselData $carousel 图文信息
     */
    public \AdOceanSdk\File\Data\CarouselCreatePostResponseCarouselData $carousel;
    
}