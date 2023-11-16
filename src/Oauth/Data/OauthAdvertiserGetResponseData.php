<?php

declare(strict_types=1);

namespace AdOceanSdk\Oauth\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class OauthAdvertiserGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Oauth\Data\OauthAdvertiserGetResponseListData> $list 账号列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Oauth\Data\OauthAdvertiserGetResponseListData::class)]
    public array $list;
    
}