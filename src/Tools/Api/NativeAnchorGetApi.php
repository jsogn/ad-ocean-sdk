<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取账户下原生锚点
 * @doc  https://open.oceanengine.com/labels/7/docs/1757715831323652
 */
class NativeAnchorGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/native_anchor/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\NativeAnchorGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\NativeAnchorGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\NativeAnchorGetResponse::from($response->toArray());
    }
}