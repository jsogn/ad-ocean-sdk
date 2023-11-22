<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsSitePreviewGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id，广告主id， 传的这个advertiser_id的数字的范围：1 <= advertiser_id <=MAX_INT64
     */
    public int $advertiser_id;
    
    /**
     * @var string $site_id 橙子建站站点id可通过【获取橙子建站站点列表】获取
     */
    public string $site_id;
    
}