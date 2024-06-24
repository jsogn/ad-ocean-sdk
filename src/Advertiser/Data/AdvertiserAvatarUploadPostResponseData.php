<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserAvatarUploadPostResponseData extends Data
{

    /**
     * @var string $image_id 账户头像图片ID，您可使用此ID前往「更新广告主账户头像」接口更新头像
     */
    public string $image_id;
    
}