<?php

namespace AdOceanSdk\Oauth\Params;

use AdOceanSdk\RequestParams;

class RefreshTokenPostParams extends RequestParams
{
    /**
     * @var string 用于验证权限的token
     */
    public string $access_token;

    /**
     * @var string 开发者申请的应用APP_ID，可通过“应用管理”界面查看
     */
    public string $app_id;

    /**
     * @var string 开发者应用的私钥Secret，可通过“应用管理”界面查看（确保填入secret与app_id对应以免报错！）
     */
    public string $secret;

    /**
     * @var string 刷新token,从"获取Access Token"和“刷新Access Token”的返回结果中得到)，刷新后会过期，请及时保存最新的token
     */
    public string $refresh_token;
}