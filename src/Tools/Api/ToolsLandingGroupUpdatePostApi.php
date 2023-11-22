<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新落地页组信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710630182912
 */
class ToolsLandingGroupUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/landing_group/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsLandingGroupUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsLandingGroupUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsLandingGroupUpdatePostResponse::from($response->toArray());
    }
}