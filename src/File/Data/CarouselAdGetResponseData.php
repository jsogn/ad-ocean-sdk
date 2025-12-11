<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CarouselAdGetResponseData extends Data
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var array<\AdOceanSdk\File\Data\CarouselAdGetResponseCarouselsData> $carousels 图文信息
     */
    public array $carousels;
    
}