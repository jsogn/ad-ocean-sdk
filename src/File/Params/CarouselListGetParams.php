<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class CarouselListGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主id
     */
    public int $advertiser_id ;
    
    /**
     * @var \AdOceanSdk\File\Data\CarouselListGetParamFilteringData $filtering 图文过滤信息
     */
    public \AdOceanSdk\File\Data\CarouselListGetParamFilteringData $filtering;
    
    /**
     * @var int $page_size 页码，默认值1
     */
    public int $page_size;
    
    /**
     * @var int $page 页面大小，默认值20
     */
    public int $page;
    
}