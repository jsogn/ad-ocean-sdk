<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class CarouselDeletePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主id
     */
    public int $advertiser_id ;
    
    /**
     * @var array<int> $carousel_ids  图文 id
     */
    public array $carousel_ids ;
    
}