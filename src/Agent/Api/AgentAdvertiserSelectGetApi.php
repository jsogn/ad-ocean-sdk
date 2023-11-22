<?php

namespace AdOceanSdk\Agent\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 代理商管理账户列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710516003852
 */
class AgentAdvertiserSelectGetApi extends RequestApi
{
    protected string $address = 'open_api/2/agent/advertiser/select/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Agent\Params\AgentAdvertiserSelectGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Agent\Response\AgentAdvertiserSelectGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Agent\Response\AgentAdvertiserSelectGetResponse::from($response->toArray());
    }
}