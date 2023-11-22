<?php

namespace AdOceanSdk\Agent\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取代理商信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710518158351
 */
class AgentInfoGetApi extends RequestApi
{
    protected string $address = 'open_api/2/agent/info/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Agent\Params\AgentInfoGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Agent\Response\AgentInfoGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Agent\Response\AgentInfoGetResponse::from($response->toArray());
    }
}