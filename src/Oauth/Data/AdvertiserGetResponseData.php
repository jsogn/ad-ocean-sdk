<?php

declare(strict_types=1);

namespace AdOceanSdk\Oauth\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Oauth\Data\AdvertiserGetResponseListData> $list 账号列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Oauth\Data\AdvertiserGetResponseListData::class)]
    public array $list;
    
}