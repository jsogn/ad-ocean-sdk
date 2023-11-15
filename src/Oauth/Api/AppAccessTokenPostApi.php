<?php

namespace AdOceanSdk\Oauth\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取APP Access Token
 * @doc  https://open.oceanengine.com/labels/7/docs/1713655428885516
 */
class AppAccessTokenPostApi extends RequestApi
{
    protected string $address = 'open_api/oauth2/app_access_token/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Oauth\Params\AppAccessTokenPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Oauth\Response\AppAccessTokenPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Oauth\Response\AppAccessTokenPostResponse::from($response->toArray());
    }
}