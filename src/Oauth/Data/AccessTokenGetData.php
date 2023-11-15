<?php

namespace AdOceanSdk\Oauth\Data;

use AdOceanSdk\Kernel\Data\Data;

class AccessTokenGetData extends Data
{
    /**
     * @var string 用于验证权限的token
     */
    public string $access_token;

    /**
     * @var int access_token 剩余有效时间,单位(秒)
     */
    public int $expires_in;

    /**
     * @var string 刷新access_token,用于获取新的access_token和refresh_token，并且刷新过期时间
     */
    public string $refresh_token;

    /**
     * @var int refresh_token剩余有效时间,单位(秒)
     */
    public int $refresh_token_expires_in;
}