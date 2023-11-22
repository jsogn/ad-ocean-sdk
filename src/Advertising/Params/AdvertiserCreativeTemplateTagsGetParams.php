<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class AdvertiserCreativeTemplateTagsGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $page 页数，默认值：1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认值：10
     */
    public int $page_size;
    
}