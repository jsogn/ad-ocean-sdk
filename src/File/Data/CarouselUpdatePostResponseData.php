<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CarouselUpdatePostResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\File\Data\CarouselUpdatePostResponseCarouselsData> $carousels 图片信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\File\Data\CarouselUpdatePostResponseCarouselsData::class)]
    public array $carousels;
    
}