<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取地域列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710678458380
 */
class ToolsRegionGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/region/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsRegionGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsRegionGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsRegionGetResponse::from($response->toArray());
    }
}