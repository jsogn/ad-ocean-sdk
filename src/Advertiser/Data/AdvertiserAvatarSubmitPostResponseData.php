<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserAvatarSubmitPostResponseData extends Data
{

    /**
     * @var string $advertiser_id 广告主id
     */
    public string $advertiser_id;
    
}