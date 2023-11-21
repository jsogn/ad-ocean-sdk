<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserAvatarSubmitPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $image_id 账户头像，例：web.business.image/201910225d0d5a39ae2e246645b486
     */
    public string $image_id;
    
    /**
     * @var string $source_info 品牌名称
     */
    public string $source_info;
    
}