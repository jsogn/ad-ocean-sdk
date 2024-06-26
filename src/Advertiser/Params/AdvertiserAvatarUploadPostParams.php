<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserAvatarUploadPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主账户id
     */
    public int $advertiser_id;
    
    /**
     * @var string $image_file 图片文件
     */
    public string $image_file;
    
}