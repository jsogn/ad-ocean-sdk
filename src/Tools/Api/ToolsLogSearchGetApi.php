<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 日志查询
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710682956815
 */
class ToolsLogSearchGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/log_search/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsLogSearchGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsLogSearchGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsLogSearchGetResponse::from($response->toArray());
    }
}