<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class AdvertiserBudgetGetParams extends RequestParams
{

    /**
     * @var array<int> $advertiser_ids 广告主id列表，长度限制：[1,100]
     */
    public array $advertiser_ids;
    
}