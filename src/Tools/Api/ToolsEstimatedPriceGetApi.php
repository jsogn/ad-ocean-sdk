<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取预估点击成本
 * @doc  https://open.oceanengine.com/labels/7/docs/1717213696709710
 */
class ToolsEstimatedPriceGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/estimated_price/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEstimatedPriceGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEstimatedPriceGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEstimatedPriceGetResponse::from($response->toArray());
    }
}