<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsSiteHandselPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id，范围：1 <= advertiser_id <=MAX_INT64
     */
    public int $advertiser_id;
    
    /**
     * @var array<string> $site_ids 站点id列表, min_size=1, max_size=20
     */
    public array $site_ids;
    
    /**
     * @var array<string> $target_advertiser_ids 目标广告主id列表, min_size=1, max_size=20
     */
    public array $target_advertiser_ids;
    
}