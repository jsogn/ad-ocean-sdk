<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取模板（白盒策略）列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1758356001909828
 */
class CreativeStrategyListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/creative/strategy/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\CreativeStrategyListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\CreativeStrategyListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\CreativeStrategyListGetResponse::from($response->toArray());
    }
}