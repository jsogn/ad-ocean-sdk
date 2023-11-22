<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取橙子建站站点列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710620579852
 */
class ToolsSiteGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/site/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsSiteGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsSiteGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsSiteGetResponse::from($response->toArray());
    }
}