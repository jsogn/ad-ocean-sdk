<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取创意列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710540735500
 */
class CreativeGetApi extends RequestApi
{
    protected string $address = 'open_api/2/creative/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\CreativeGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\CreativeGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\CreativeGetResponse::from($response->toArray());
    }
}