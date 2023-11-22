<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Params;

use AdOceanSdk\RequestParams;

class MajordomoAdvertiserSelectGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 纵横组织id
     */
    public int $advertiser_id;
    
}