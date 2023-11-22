<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class ProjectDeletePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $project_ids 项目ID集合，且每一个广告项目ID属于广告主ID，list长度限制1～10
     */
    public array $project_ids;
    
}