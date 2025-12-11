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
    public array $list;
    
}