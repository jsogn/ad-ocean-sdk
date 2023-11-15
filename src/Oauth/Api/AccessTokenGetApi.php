<?php

namespace AdOceanSdk\Oauth\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;
use AdOceanSdk\Oauth\Params\AccessTokenGetParams;
use AdOceanSdk\Oauth\Response\AccessTokenGetResponse;

/**
 * @desc 获取Access Token
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710505596940
 */
class AccessTokenGetApi extends RequestApi
{
    protected string $address = 'open_api/oauth2/access_token/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(AccessTokenGetParams|RequestParamInterface|array $params = []): AccessTokenGetResponse
    {
        $response = parent::call($params);

        return AccessTokenGetResponse::from($response->toArray());
    }
}