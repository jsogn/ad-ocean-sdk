<?php

namespace AdOceanSdk\Agent\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 广告主账户复制
 * @doc  https://open.oceanengine.com/labels/7/docs/1775097300794371
 */
class AgentAdvertiserCopyPostApi extends RequestApi
{
    protected string $address = 'open_api/2/agent/advertiser/copy/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Agent\Params\AgentAdvertiserCopyPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Agent\Response\AgentAdvertiserCopyPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Agent\Response\AgentAdvertiserCopyPostResponse::from($response->toArray());
    }
}