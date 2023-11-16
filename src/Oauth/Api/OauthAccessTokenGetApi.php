<?php

namespace AdOceanSdk\Oauth\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;
use AdOceanSdk\Oauth\Params\OauthAccessTokenGetParams;
use AdOceanSdk\Oauth\Response\OauthAccessTokenGetResponse;

/**
 * @desc 获取Access Token
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710505596940
 */
class OauthAccessTokenGetApi extends RequestApi
{
    protected string $address = 'open_api/oauth2/access_token/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(OauthAccessTokenGetParams|RequestParamInterface|array $params = []): OauthAccessTokenGetResponse
    {
        $response = parent::call($params);

        return OauthAccessTokenGetResponse::from($response->toArray());
    }
}