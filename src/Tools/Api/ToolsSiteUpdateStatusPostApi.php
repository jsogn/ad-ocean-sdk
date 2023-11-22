<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更改橙子建站站点状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710618884096
 */
class ToolsSiteUpdateStatusPostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/site/update_status/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsSiteUpdateStatusPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsSiteUpdateStatusPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsSiteUpdateStatusPostResponse::from($response->toArray());
    }
}