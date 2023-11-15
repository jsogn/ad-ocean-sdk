<?php

namespace AdOceanSdk\Oauth\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取已授权账户
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710506574848
 */
class AdvertiserGetApi extends RequestApi
{
    protected string $address = 'open_api/oauth2/advertiser/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Oauth\Params\AdvertiserGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Oauth\Response\AdvertiserGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Oauth\Response\AdvertiserGetResponse::from($response->toArray());
    }
}