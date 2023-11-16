<?php

namespace AdOceanSdk\Oauth\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取已授权账户
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710506574848
 */
class OauthAdvertiserGetApi extends RequestApi
{
    protected string $address = 'open_api/oauth2/advertiser/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Oauth\Params\OauthAdvertiserGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Oauth\Response\OauthAdvertiserGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Oauth\Response\OauthAdvertiserGetResponse::from($response->toArray());
    }
}