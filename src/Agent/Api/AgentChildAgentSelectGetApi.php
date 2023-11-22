<?php

namespace AdOceanSdk\Agent\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 二级代理商列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710517693452
 */
class AgentChildAgentSelectGetApi extends RequestApi
{
    protected string $address = 'open_api/2/agent/child_agent/select/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Agent\Params\AgentChildAgentSelectGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Agent\Response\AgentChildAgentSelectGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Agent\Response\AgentChildAgentSelectGetResponse::from($response->toArray());
    }
}