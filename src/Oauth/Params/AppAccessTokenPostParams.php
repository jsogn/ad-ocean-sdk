<?php

declare(strict_types=1);

namespace AdOceanSdk\Oauth\Params;

use AdOceanSdk\RequestParams;

class AppAccessTokenPostParams extends RequestParams
{

    /**
     * @var int $app_id 开发者申请的应用APP_ID，可通过“应用管理”界面查看
     */
    public int $app_id;
    
    /**
     * @var string $secret 开发者应用的私钥Secret，可通过“应用管理”界面查看（确保填入secret与app_id对应以免报错！）
     */
    public string $secret;
    
}