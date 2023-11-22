<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 行动号召字段内容获取
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710684229644
 */
class ToolsActionTextGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/action_text/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsActionTextGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsActionTextGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsActionTextGetResponse::from($response->toArray());
    }
}