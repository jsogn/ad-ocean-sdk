<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建落地页组
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710628472844
 */
class ToolsLandingGroupCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/landing_group/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsLandingGroupCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsLandingGroupCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsLandingGroupCreatePostResponse::from($response->toArray());
    }
}