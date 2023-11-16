<?php

declare(strict_types=1);

namespace AdOceanSdk\Oauth\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class OauthAppAccessTokenPostResponseData extends Data
{

    /**
     * @var string $access_token 应用级别token
     */
    public string $access_token;
    
    /**
     * @var int $expires_in access_token剩余有效时间,单位(秒)
     */
    public int $expires_in;
    
}