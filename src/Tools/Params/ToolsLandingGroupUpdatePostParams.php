<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsLandingGroupUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id，范围：1 <= advertiser_id <=MAX_INT64
     */
    public int $advertiser_id;
    
    /**
     * @var string $group_id 落地页组 ID
     */
    public string $group_id;
    
    /**
     * @var string $group_title 落地页组名称
     */
    public string $group_title;
    
    /**
     * @var array<int> $append_sites 新加站点列表
     */
    public array $append_sites;
    
}