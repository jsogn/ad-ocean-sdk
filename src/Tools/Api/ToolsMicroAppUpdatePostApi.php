<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新字节小程序
 * @doc  https://open.oceanengine.com/labels/7/docs/1780614097935372
 */
class ToolsMicroAppUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/micro_app/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsMicroAppUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsMicroAppUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsMicroAppUpdatePostResponse::from($response->toArray());
    }
}