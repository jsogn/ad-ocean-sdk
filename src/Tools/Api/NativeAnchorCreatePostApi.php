<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建原生锚点
 * @doc  https://open.oceanengine.com/labels/7/docs/1757798123491403
 */
class NativeAnchorCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/native_anchor/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\NativeAnchorCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\NativeAnchorCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\NativeAnchorCreatePostResponse::from($response->toArray());
    }
}