<?php

namespace AdOceanSdk\Oauth\Params;

use AdOceanSdk\RequestParams;

class AccessTokenGetParams extends RequestParams
{
    /**
     * @var int 开发者申请的应用APP_ID
     */
    public int $app_id;

    /**
     * @var string 开发者应用的私钥Secret
     */
    public string $secret;

    /**
     * @var string 授权码，在授权完成后回调时会提供该授权码
     */
    public string $auth_code;

    public function rules(): array
    {
        return [
            'app_id'    => 'required',
            'secret'    => 'required',
            'auth_code' => 'required',
        ];
    }
}