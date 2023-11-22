<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取落地页组
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710629043212
 */
class ToolsLandingGroupGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/landing_group/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsLandingGroupGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsLandingGroupGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsLandingGroupGetResponse::from($response->toArray());
    }
}