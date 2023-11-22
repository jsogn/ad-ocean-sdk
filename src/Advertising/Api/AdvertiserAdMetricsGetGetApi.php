<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取素材派生数据（计划维度）
 * @doc  https://open.oceanengine.com/labels/7/docs/1755177028152324
 */
class AdvertiserAdMetricsGetGetApi extends RequestApi
{
    protected string $address = 'open_api/2/creative/ad/metrics/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\AdvertiserAdMetricsGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\AdvertiserAdMetricsGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\AdvertiserAdMetricsGetGetResponse::from($response->toArray());
    }
}