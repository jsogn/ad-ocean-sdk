<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取字节小程序
 * @doc  https://open.oceanengine.com/labels/7/docs/1778249831680135
 */
class ToolsMicroAppListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/micro_app/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsMicroAppListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsMicroAppListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsMicroAppListGetResponse::from($response->toArray());
    }
}