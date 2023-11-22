<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsPromotionRaiseVersionGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主ID
     */
    public int $advertiser_id ;
    
    /**
     * @var int $promotion_id  广告ID
     */
    public int $promotion_id ;
    
    /**
     * @var int $page 页码，默认值：1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，允许值：1-100，默认值：10
     */
    public int $page_size;
    
}