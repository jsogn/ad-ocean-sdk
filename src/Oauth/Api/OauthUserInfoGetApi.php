<?php

namespace AdOceanSdk\Oauth\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取授权User信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710507039756
 */
class OauthUserInfoGetApi extends RequestApi
{
    protected string $address = 'open_api/2/user/info/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Oauth\Params\OauthUserInfoGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Oauth\Response\OauthUserInfoGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Oauth\Response\OauthUserInfoGetResponse::from($response->toArray());
    }
}