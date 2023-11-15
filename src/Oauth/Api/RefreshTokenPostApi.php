<?php

namespace AdOceanSdk\Oauth\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\Oauth\Response\RefreshTokenPostResponse;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 刷新Refresh Token
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710506097679
 */
class RefreshTokenPostApi extends RequestApi
{
    protected string $address = 'open_api/oauth2/refresh_token/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(RefreshTokenPostResponse|RequestParamInterface|array $params = []): RefreshTokenPostResponse
    {
        $response = parent::call($params);

        return RefreshTokenPostResponse::from($response->toArray());
    }
}