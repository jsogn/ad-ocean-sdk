<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsSiteCopyPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id，数字范围：1 <= advertiser_id <=MAX_INT64
     */
    public int $advertiser_id;
    
    /**
     * @var array<string> $site_ids 站点id列表, min_size=1, max_size=20
     */
    public array $site_ids;
    
}