<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建橙子建站站点
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710617712640
 */
class ToolsSiteCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/site/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsSiteCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsSiteCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsSiteCreatePostResponse::from($response->toArray());
    }
}