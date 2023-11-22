<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取素材派生数据（素材维度）
 * @doc  https://open.oceanengine.com/labels/7/docs/1755177023094787
 */
class AdvertiserCreativeMaterialMetricsGetApi extends RequestApi
{
    protected string $address = 'open_api/2/creative/material/metrics/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\AdvertiserCreativeMaterialMetricsGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\AdvertiserCreativeMaterialMetricsGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\AdvertiserCreativeMaterialMetricsGetResponse::from($response->toArray());
    }
}