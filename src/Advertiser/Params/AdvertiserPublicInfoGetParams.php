<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserPublicInfoGetParams extends RequestParams
{

    /**
     * @var array<number> $advertiser_ids 广告主ID集合(如果包含没有访问权限的ID,将返回PERMISSION_ERROR).取值范围: 1-100
     */
    public array $advertiser_ids;
    
}