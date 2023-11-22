<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsSiteReadGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id，范围：1 <= advertiser_id <=MAX_INT64
     */
    public int $advertiser_id;
    
    /**
     * @var string $site_id 橙子建站站点id列表 ：1 <= 长度 <= 20可通过【获取橙子建站站点列表】获取
     */
    public string $site_id;
    
}