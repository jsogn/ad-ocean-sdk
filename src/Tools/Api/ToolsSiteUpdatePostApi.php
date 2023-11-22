<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 修改橙子建站站点
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710618300431
 */
class ToolsSiteUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/site/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsSiteUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsSiteUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsSiteUpdatePostResponse::from($response->toArray());
    }
}