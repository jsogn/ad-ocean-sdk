<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建字节小程序
 * @doc  https://open.oceanengine.com/labels/7/docs/1780613896121344
 */
class ToolsMicroAppCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/micro_app/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsMicroAppCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsMicroAppCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsMicroAppCreatePostResponse::from($response->toArray());
    }
}