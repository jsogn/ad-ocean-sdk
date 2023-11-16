<?php

namespace AdOceanSdk\Oauth\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\Oauth\Response\OauthRefreshTokenPostResponse;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 刷新Refresh Token
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710506097679
 */
class OauthRefreshTokenPostApi extends RequestApi
{
    protected string $address = 'open_api/oauth2/refresh_token/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(OauthRefreshTokenPostResponse|RequestParamInterface|array $params = []): OauthRefreshTokenPostResponse
    {
        $response = parent::call($params);

        return OauthRefreshTokenPostResponse::from($response->toArray());
    }
}