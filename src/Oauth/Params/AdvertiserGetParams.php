<?php

declare(strict_types=1);

namespace AdOceanSdk\Oauth\Params;

use AdOceanSdk\RequestParams;

class AdvertiserGetParams extends RequestParams
{

    /**
     * @var string $access_token 授权access_token，从"获取Access Token"和“刷新Access Token”的返回结果中得到
     */
    public string $access_token;
    
}