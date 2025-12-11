<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class CarouselUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var array<\AdOceanSdk\File\Data\CarouselUpdatePostParamCarouselsData> $carousels  需要更新的图文信息
     */
    public array $carousels ;
    
}