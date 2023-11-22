<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取创意列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710540735500
 */
class AdvertiserCreativeGetGetApi extends RequestApi
{
    protected string $address = 'open_api/2/creative/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\AdvertiserCreativeGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\AdvertiserCreativeGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\AdvertiserCreativeGetGetResponse::from($response->toArray());
    }
}