<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CarouselListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\File\Data\CarouselListGetResponseCarouselsData> $carousels 图文信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\File\Data\CarouselListGetResponseCarouselsData::class)]
    public array $carousels;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}